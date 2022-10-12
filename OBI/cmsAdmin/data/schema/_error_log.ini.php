<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '1',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '1',
  '_disableView' => '1',
  '_filenameFields' => 'num',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '100',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => '_error_log',
  'listPageFields' => 'dateLogged, _error_summary_',
  'listPageOrder' => 'num DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '1',
  'menuName' => 'Developer Log',
  'menuOrder' => '0000000025',
  'menuType' => 'multi',
  'tableHidden' => '1',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 2,
    'label' => 'Last Updated',
    'type' => 'none',
    'indexed' => '0',
  ),
  'updatedByUserNum' => array(
    'order' => 3,
    'label' => 'Last Updated By',
    'type' => 'none',
    'indexed' => '',
  ),
  'dateLogged' => array(
    'order' => 4,
    'label' => 'Date',
    'type' => 'date',
    'isSystemField' => '1',
    'indexed' => '0',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => '',
    'defaultDateString' => '2015-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '1',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'error' => array(
    'order' => 5,
    'label' => 'Error',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'url' => array(
    'order' => 6,
    'label' => 'URL',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'filepath' => array(
    'order' => 7,
    'label' => 'Filepath',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'line_num' => array(
    'order' => 8,
    'label' => 'Line Num',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '50',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'backtrace' => array(
    'order' => 9,
    'label' => 'Backtrace',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  '__separator003__' => array(
    'order' => 10,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Advanced Technical Details',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'user_cms' => array(
    'order' => 11,
    'label' => 'CMS User',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'user_web' => array(
    'order' => 12,
    'label' => 'Web User',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'remote_addr' => array(
    'order' => 13,
    'label' => 'IP Address',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'http_user_agent' => array(
    'order' => 14,
    'label' => 'Browser User Agent',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '600',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  '__separator001__' => array(
    'order' => 15,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'get_vars' => array(
    'order' => 16,
    'label' => '$_GET =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'post_vars' => array(
    'order' => 17,
    'label' => '$_POST =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'request_vars' => array(
    'order' => 18,
    'label' => '$_REQUEST =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'cookie_vars' => array(
    'order' => 19,
    'label' => '$_COOKIE =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'session_vars' => array(
    'order' => 20,
    'label' => '$_SESSION =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'server_vars' => array(
    'order' => 21,
    'label' => '$_SERVER =',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'symbol_table' => array(
    'order' => 22,
    'label' => 'Symbol Table',
    'type' => 'textbox',
    'indexed' => '',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
  'raw_log_data' => array(
    'order' => 23,
    'label' => 'Raw Log Data',
    'type' => 'textbox',
    'indexed' => '0',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '200',
    'autoFormat' => '0',
  ),
);
?>