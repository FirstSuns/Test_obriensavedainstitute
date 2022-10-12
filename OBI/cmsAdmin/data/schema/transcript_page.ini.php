<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => NULL,
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '1',
  '_listPage' => NULL,
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '/transcript-request/index.php',
  '_requiredPlugins' => '',
  '_tableName' => 'transcript_page',
  'listPageFields' => NULL,
  'listPageOrder' => '',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Transcript Page',
  'menuOrder' => '0000000018',
  'menuPrefixIcon' => '',
  'menuType' => 'single',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
    'name' => 'num',
    '_tableName' => 'transcript_page',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
    'name' => 'createdDate',
    '_tableName' => 'transcript_page',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
    'name' => 'createdByUserNum',
    '_tableName' => 'transcript_page',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
    'name' => 'updatedDate',
    '_tableName' => 'transcript_page',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
    'name' => 'updatedByUserNum',
    '_tableName' => 'transcript_page',
  ),
  'header_image' => array(
    'order' => '6',
    'label' => 'Header Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,jpeg,png',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '1',
    'resizeOversizedImages' => '0',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '0',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Sub Header',
    'infoField2' => 'Text Color',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
    'name' => 'header_image',
    '_tableName' => 'transcript_page',
  ),
  'sub_text' => array(
    'order' => 7,
    'label' => 'Sub Text',
    'type' => 'textbox',
    'indexed' => '',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
    'name' => 'sub_text',
    '_tableName' => 'transcript_page',
  ),
  'content' => array(
    'order' => '1520953140',
    'label' => 'Content',
    'type' => 'wysiwyg',
    'indexed' => '0',
    'fieldPrefix' => '',
    'description' => '',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '600',
    'allowedExtensions' => 'gif,jpg,jpeg,png,svg,wmv,mov,swf,pdf',
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
    'cropThumbnails' => '0',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'cropThumbnails2' => '0',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'cropThumbnails3' => '0',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'cropThumbnails4' => '0',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'name' => 'content',
    '_tableName' => 'transcript_page',
  ),
  '__separator001__' => array(
    'order' => 1564594936,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'SEO Manager',
    'separatorHTML' => '<div class=\'col-sm-2\'>
  Column 1
</div>
<div class=\'col-sm-10\'>
  Column 2
</div>
',
    'isCollapsible' => '',
    'isCollapsed' => '',
    'name' => '__separator001__',
    '_tableName' => 'transcript_page',
  ),
  'meta_title' => array(
    'order' => 1564594942,
    'label' => 'Meta Title',
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
    'name' => 'meta_title',
    '_tableName' => 'transcript_page',
  ),
  'meta_description' => array(
    'order' => 1564594962,
    'label' => 'Meta Description',
    'type' => 'textbox',
    'indexed' => '',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
    'name' => 'meta_description',
    '_tableName' => 'transcript_page',
  ),
  'meta_keywords' => array(
    'order' => 1564594965,
    'label' => 'Meta Keywords',
    'type' => 'textbox',
    'indexed' => '',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
    'name' => 'meta_keywords',
    '_tableName' => 'transcript_page',
  ),
);
?>