<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '/cmsb/_testViewers//categoryList_temp_compare.php',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'breadcrumb',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '/cmsb/_testViewers//categoryList_temp_compare.php',
  '_maxDepth' => '3',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '1000',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'category_sample',
  'listPageFields' => 'name, lineage, num, breadcrumb',
  'listPageOrder' => 'globalOrder',
  'listPageSearchFields' => 'Search|title,content|query
Title|title|keyword
Content|content|keyword',
  'menuHidden' => '0',
  'menuName' => 'Category Sample',
  'menuOrder' => '1444787982',
  'menuType' => 'category',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'globalOrder' => array(
    'order' => 6,
    'label' => '_globalOrder',
    'type' => 'none',
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'isSystemField' => '1',
  ),
  'siblingOrder' => array(
    'order' => 7,
    'label' => '_siblingOrder',
    'type' => 'none',
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'isSystemField' => '1',
  ),
  'lineage' => array(
    'order' => 8,
    'label' => '_lineage',
    'type' => 'none',
    'customColumnType' => 'varchar(255) NOT NULL',
    'isSystemField' => '1',
  ),
  'depth' => array(
    'order' => 9,
    'label' => '_depth',
    'type' => 'none',
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'isSystemField' => '1',
  ),
  'parentNum' => array(
    'order' => 10,
    'label' => 'Parent Category',
    'type' => 'parentCategory',
    'customColumnType' => 'int(10) unsigned NOT NULL',
    'isSystemField' => '1',
  ),
  'breadcrumb' => array(
    'order' => 11,
    'label' => 'Breadcrumb',
    'type' => 'none',
    'customColumnType' => 'varchar(255) NOT NULL',
    'isSystemField' => '1',
  ),
  'name' => array(
    'order' => 13,
    'label' => 'Name',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '0',
    'charsetRule' => '',
    'charset' => '',
  ),
  'content' => array(
    'order' => 14,
    'label' => 'Content',
    'type' => 'wysiwyg',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '300',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
);
?>