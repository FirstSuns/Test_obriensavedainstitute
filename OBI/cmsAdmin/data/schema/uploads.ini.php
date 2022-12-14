<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'num',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'uploads',
  'listPageFields' => 'num, tableName, fieldName, recordNum, filePath',
  'listPageOrder' => 'num DESC',
  'listPageSearchFields' => '_ALL_
Table Name|tableName|query
Field Name|fieldName|query
Record Number|recordNum|query',
  'menuHidden' => '1',
  'menuName' => 'Uploads',
  'menuOrder' => '999',
  'menuType' => '',
  'tableHidden' => '1',
  'num' => array(
    'order' => 1,
    'label' => 'num',
    'type' => 'none',
    'indexed' => '0',
  ),
  'order' => array(
    'order' => 2,
    'customColumnType' => 'int(10) unsigned NOT NULL',
  ),
  'createdTime' => array(
    'order' => 3,
    'customColumnType' => 'datetime NOT NULL',
  ),
  'tableName' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 4,
    'label' => 'tableName',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'fieldName' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 5,
    'label' => 'fieldName',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'recordNum' => array(
    'customColumnType' => 'INT',
    'order' => '6',
    'label' => 'recordNum',
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
  'preSaveTempId' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 7,
    'label' => 'preSaveTempId',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'storage' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 8,
    'label' => 'Storage',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'filePath' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 9,
    'label' => 'filePath',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'urlPath' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 10,
    'label' => 'urlPath',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'width' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 11,
    'label' => 'width',
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
  'height' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 12,
    'label' => 'height',
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
  '__separator001__' => array(
    'order' => 13,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Thumbnails',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'thumbFilePath' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 14,
    'label' => 'thumbFilePath',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbUrlPath' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 15,
    'label' => 'thumbUrlPath',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbWidth' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 16,
    'label' => 'thumbWidth',
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
  'thumbHeight' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 17,
    'label' => 'thumbHeight',
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
  'thumbFilePath2' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 18,
    'label' => 'thumbFilePath2',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbUrlPath2' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 19,
    'label' => 'thumbUrlPath2',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbWidth2' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 20,
    'label' => 'thumbWidth2',
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
  'thumbHeight2' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 21,
    'label' => 'thumbHeight2',
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
  'thumbFilePath3' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 22,
    'label' => 'thumbFilePath3',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbUrlPath3' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 23,
    'label' => 'thumbUrlPath3',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbWidth3' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 24,
    'label' => 'thumbWidth3',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbHeight3' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 25,
    'label' => 'thumbHeight3',
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
  'thumbFilePath4' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 26,
    'label' => 'thumbFilePath4',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbUrlPath4' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 27,
    'label' => 'thumbUrlPath4',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'thumbWidth4' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 28,
    'label' => 'thumbWidth4',
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
  'thumbHeight4' => array(
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'order' => 29,
    'label' => 'thumbHeight4',
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
  '__separator002__' => array(
    'order' => 30,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Info Fields',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'info1' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 31,
    'label' => 'info1',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'info2' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 32,
    'label' => 'info2',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'info3' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 33,
    'label' => 'info3',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'info4' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 34,
    'label' => 'info4',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'info5' => array(
    'customColumnType' => 'VARCHAR(255)',
    'order' => 35,
    'label' => 'info5',
    'type' => 'textfield',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
);
?>