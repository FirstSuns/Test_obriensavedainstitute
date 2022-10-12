<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'firstname',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '2',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'transcript_request',
  'listPageFields' => 'dragSortOrder, firstname,email,phone',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Transcript Request',
  'menuOrder' => '0000000019',
  'menuPrefixIcon' => '',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
    'name' => 'num',
    '_tableName' => 'transcript_request',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
    'name' => 'createdDate',
    '_tableName' => 'transcript_request',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
    'name' => 'createdByUserNum',
    '_tableName' => 'transcript_request',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
    'name' => 'updatedDate',
    '_tableName' => 'transcript_request',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
    'name' => 'updatedByUserNum',
    '_tableName' => 'transcript_request',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'dragSortOrder',
    'type' => 'none',
    'indexed' => '',
    'name' => 'dragSortOrder',
    '_tableName' => 'transcript_request',
  ),
  'select_school' => array(
    'order' => 7,
    'label' => 'Select School You Attended',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'The Salon Professional Academy
O\'Briend Aveda Institute',
    'name' => 'select_school',
    '_tableName' => 'transcript_request',
  ),
  'month_year_started' => array(
    'order' => 8,
    'label' => 'Month/Year Started',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'month_year_started',
    '_tableName' => 'transcript_request',
  ),
  'month_year_stop' => array(
    'order' => 9,
    'label' => 'Month/Year Stopped Attending',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'month_year_stop',
    '_tableName' => 'transcript_request',
  ),
  'graduate' => array(
    'order' => 10,
    'label' => 'Did You Graduate',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'Yes
No',
    'name' => 'graduate',
    '_tableName' => 'transcript_request',
  ),
  'firstname' => array(
    'order' => 11,
    'label' => 'First Name',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'firstname',
    '_tableName' => 'transcript_request',
  ),
  'lastname' => array(
    'order' => 12,
    'label' => 'Last Name',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'lastname',
    '_tableName' => 'transcript_request',
  ),
  'phone' => array(
    'order' => 13,
    'label' => 'Phone Number',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'phone',
    '_tableName' => 'transcript_request',
  ),
  'email' => array(
    'order' => 14,
    'label' => 'Email',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'email',
    '_tableName' => 'transcript_request',
  ),
  'streetname' => array(
    'order' => 15,
    'label' => 'Street Name',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'streetname',
    '_tableName' => 'transcript_request',
  ),
  'city' => array(
    'order' => 16,
    'label' => 'City',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'city',
    '_tableName' => 'transcript_request',
  ),
  'state' => array(
    'order' => 17,
    'label' => 'State',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'state',
    '_tableName' => 'transcript_request',
  ),
  'zip' => array(
    'order' => 18,
    'label' => 'Zip',
    'type' => 'textfield',
    'indexed' => '',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldAddonBefore' => '',
    'fieldAddonAfter' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'name' => 'zip',
    '_tableName' => 'transcript_request',
  ),
  'certify' => array(
    'order' => 19,
    'label' => 'Transcript Payment',
    'type' => 'checkbox',
    'indexed' => '0',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => '1',
    'uncheckedValue' => '0',
    'name' => 'certify',
    '_tableName' => 'transcript_request',
  ),
);
?>