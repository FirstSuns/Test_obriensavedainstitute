<?php
// define globals
global $APP; //, $SETTINGS, $CURRENT_USER, $TABLE_PREFIX;
$APP['selectedMenu'] = 'admin'; // show admin menu as selected

// for debugging
$GLOBALS['CG2_DEBUG'] = false; // add "Debug: Run Viewer >>" button on code page that runs PHP code

### check access level
if (!$GLOBALS['CURRENT_USER']['isAdmin']) {
  alert(t("You don't have permissions to access this menu."));
  showInterface('');
}

// load common generator functions
include "generator_functions.php";

// register internal generators
$internalGenerators = array('listPage','detailPage', 'comboPage', 'rssFeed', 'categoryMenu'); // this order is maintained
foreach ($internalGenerators as $file) { require_once($file .".php"); }



// Dispatch generators
if (@$_REQUEST['_generator']) {
  $generator = array_where(getGenerators('all'), array('function' => $_REQUEST['_generator']));
  $generator = array_shift($generator);
  $error     = sprintf("Unknown generator '%s'!", htmlencode($_REQUEST['_generator']) );
  if ($generator) { call_user_func($generator['function'], $generator['function'], $generator['name'], $generator['description'], $generator['type']); }
  else            { cg2_homepage($error); }
  exit;
}

// show menu (if no generator specified)
cg2_homepage();
exit;


// Show menu of code generators
function cg2_homepage($error = '') {
  if ($error) { alert($error); }

  // prepare adminUI() placeholders
  $adminUI = [];
  
  // main content
  $adminUI['CONTENT'] = '';
  
  // list internal generators
  $adminUI['CONTENT'] .= _cg2_getGeneratorList(
    t("Create a Viewer"),
    t("'Viewers' are PHP files that display the data from the CMS in all the different 'views' you might have on your site."),
    "private"
  );

  // list other generators (added by plugins)
  $adminUI['CONTENT'] .= _cg2_getGeneratorList(
    t("Other Generators"),
    t("Plugins can add their own code generators here"),
    "public"
  );

  // compose and output the page
  cg_adminUI($adminUI);
  exit;
}

// show list of generators for generator homepage
function _cg2_getGeneratorList($heading, $description, $type) {
  $html       = '';

  // list header
  $html .= adminUI_separator(t($heading));
  $html .= "<p>" .htmlencode($description). "</p>\n";
  $html .= "<table class='data table table-striped table-hover'>\n";

  // list rows
  $rows = '';
  foreach (getGenerators($type) as $generator) {
    $link     = "?menu=" .urlencode(@$_REQUEST['menu']). "&amp;_generator=" .urlencode($generator['function']);
    if (@$_REQUEST['tableName']) { $link .= "&amp;tableName=" . urlencode($_REQUEST['tableName']); }
    $rows    .= "<tr class='listRow'>\n";
    $rows    .= " <td><a href='$link'>" .htmlencode(t($generator['name'])). "</a></td>\n";
    $rows    .= " <td>" .htmlencode(t($generator['description'])). "</td>\n";
    $rows    .= "</tr>\n";
  }
  if (!$rows) {
    $rows    .= "<tr class='listRow'>\n";
    $rows    .= " <td style='color: #999'>".t('There are current no generators in this category.')."</td>\n";
    $rows    .= "</tr>\n";
  }
  $html .= $rows;

  // list footer
  $html .= "</table>\n";
  $html .= "</br>\n";

  //
  return $html;
}



//eof