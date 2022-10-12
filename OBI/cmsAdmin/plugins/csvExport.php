<?php
/*
Plugin Name: CSV Export
Description: Add "CSV Export" option to Advanced Commands pulldown in all sections
Version: 1.03
Requires at least: 1.35
*/

// UPDATE THESE VALUES
$GLOBALS['CSVEXPORT_ADMIN_ONLY']  = false;    // Only allow admin users to use CSV export (true or false)
$GLOBALS['CSVEXPORT_INCLUDE']     = array();  // List of tables to include, leave blank for all.  Example: ('news','jobs','etc')
$GLOBALS['CSVEXPORT_SKIP_FIELDS'] = array('dragSortOrder','_filename','_link');   // These fields won't be exported from any table.  Example: ('_filename','_link','lastUpdated','etc')

// DON'T UPDATE ANYTHING BELOW THIS LINE

$GLOBALS['CSVEXPORT_SORT_FIELDS'] = true; // sort fieldnames by schema order

addFilter('list_advancedCommands', 'csvExport_addAdvancedOption', null, 1);
addAction('section_unknownAction', 'csvExport_exportTable', null, 2);

//
function csvExport_addAdvancedOption($labelsToValues) {
  if (!_csvExport_allowAccess()) { return $labelsToValues; }

  $labelsToValues['Export as CSV (All Records)'] = 'exportAllCSV';
  $labelsToValues['Export as CSV (Search Results)'] = 'exportSearchCSV';
  return $labelsToValues;
}

//
function csvExport_exportTable($tableName, $action) {
  global $schema, $CURRENT_USER;
  $validActions = array('exportAllCSV','exportSearchCSV');
  if (!in_array($action,$validActions)) { return; }
  if (!_csvExport_allowAccess())        { return; }

  // error checking
  if (!@$schema)                                      { die("schema not defined!"); }
  if (!@$CURRENT_USER)                                { die("CURRENT_USER not defined!"); }
  if (!array_key_exists('hasEditorAccess', $GLOBALS)) { die("hasEditorAccess not defined!"); }

  // get user where (to limit to records user has access to) - MATCHES CODE IN list_functions_init()
  $whereUser = '';
  if (@$schema['createdByUserNum'] && !$GLOBALS['hasEditorAccess']) { $whereUser = "`createdByUserNum` = '{$CURRENT_USER['num']}'"; }
  if ($tableName == 'accounts' && !@$CURRENT_USER['isAdmin'])      { $whereUser = "`isAdmin` = '0'"; }

  // load records
  require_once("lib/viewer_functions.php");
  list($records, $metaData) = getRecords(array(
    'tableName'     => $tableName,
    'loadCreatedBy' => false,
    'loadUploads'   => false,
    'allowSearch'   => ($action == 'exportSearchCSV') ? true : false,
    'where'         => $whereUser,
  ));

  // sort record fields
  if ($GLOBALS['CSVEXPORT_SORT_FIELDS']) {
    foreach (array_keys($records) as $index) {
      $record = &$records[$index];
      uksort($record, '_csvExport_sortFieldsBySchemaOrder');
      unset($record);
    }
  }

  // get first record
  $firstRecord = @$records[0];
  if (!$firstRecord) { die("No records to export!"); }

  // send header
  $filename = "$tableName-" . date('Ymd-His') . '.csv';
  #header('Content-type: text/plain; charset=utf-8'); # Uncomment for debugging
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Transfer-Encoding: binary");

  // send column headers
  $line = '';
  foreach ($firstRecord as $field => $value) {
    if (in_array($field, $GLOBALS['CSVEXPORT_SKIP_FIELDS'])) { continue; }
    $line .= _csvExport_escapeAsCSV($field) . ',';
  }
  $line = chop($line, ',') . "\n";
  print $line;

  // send rows
  foreach ($records as $record) {
    $line = '';
    foreach ($record as $field => $value) {
      if (in_array($field, $GLOBALS['CSVEXPORT_SKIP_FIELDS'])) { continue; }
      if (is_array($value)) { $value = implode(', ', $value); }
      $line .= _csvExport_escapeAsCSV($value) . ',';
    }
    $line = chop($line, ',') . "\n";
    print $line;
  }

  exit;
}


//
function _csvExport_escapeAsCSV($value) {
  $value = str_replace('<br/>', '', $value);
  $value = str_replace('"', '""', $value);
  return '"' . $value . '"';
}


// check if user is allowed to use CSV Export
function _csvExport_allowAccess() {

  // admin only?
  if ($GLOBALS['CSVEXPORT_ADMIN_ONLY'] && !$GLOBALS['CURRENT_USER']['isAdmin']) { return false; }

  // limit by table
  $tableName = @$_REQUEST['menu'];
  if ($GLOBALS['CSVEXPORT_INCLUDE'] && !in_array($tableName, $GLOBALS['CSVEXPORT_INCLUDE'])) { return false; }

  //
  return true;
}

// sort field list by order key, eg: uksort($record, '_csvExport_sortFieldsBySchemaOrder');
function _csvExport_sortFieldsBySchemaOrder($fieldA, $fieldB) {
  global $schema;

  // sort pseudo fields that start with _ down (eg: _link, _filename, etc)
  if (substr($fieldA, 0, 1) == '_') { return 1; }
  if (substr($fieldB, 0, 1) == '_') { return -1; }

  // get short names (without :suffix)
  @list($shortA, $suffixA) = explode(':', $fieldA);
  @list($shortB, $suffixB) = explode(':', $fieldB);

  // sort :suffix fields down (if comparing same fieldname)
  if ($shortA == $shortB) {
    return strcmp($suffixA, $suffixB);
  }

  // sort fields by schema order
  $orderA = intval($schema[$shortA]['order']);
  $orderB = intval($schema[$shortB]['order']);
  if      ($orderA < $orderB) { $r = -1; }
  else if ($orderA > $orderB) { $r = 1; }
  else                        { $r = 0; }
  return $r;

}


?>
