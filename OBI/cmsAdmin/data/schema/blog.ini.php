<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '/blog/post.php',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => '',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'blog',
  'listPageFields' => 'dragSortOrder, title',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => 'title, content',
  'menuHidden' => '0',
  'menuName' => 'Blog',
  'menuOrder' => '0000000020',
  'menuPrefixIcon' => '',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
    'name' => 'num',
    '_tableName' => 'blog',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
    'name' => 'createdDate',
    '_tableName' => 'blog',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
    'name' => 'createdByUserNum',
    '_tableName' => 'blog',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
    'name' => 'updatedDate',
    '_tableName' => 'blog',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
    'name' => 'updatedByUserNum',
    '_tableName' => 'blog',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'Order',
    'type' => 'none',
    'name' => 'dragSortOrder',
    '_tableName' => 'blog',
  ),
  'image' => array(
    'order' => '7',
    'label' => 'Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,jpeg,png,svg,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '0',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '1',
    'resizeOversizedImages' => '0',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '500',
    'maxThumbnailWidth' => '500',
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
    'infoField1' => '',
    'infoField2' => '',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
    'name' => 'image',
    '_tableName' => 'blog',
  ),
  'title' => array(
    'order' => 8,
    'type' => 'textfield',
    'label' => 'Title',
    'isRequired' => '1',
    'isPasswordField' => '0',
    'defaultValue' => '',
    'maxLength' => '0',
    'name' => 'title',
    '_tableName' => 'blog',
  ),
  'social_title' => array(
    'order' => 9,
    'label' => 'Social Title',
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
    'name' => 'social_title',
    '_tableName' => 'blog',
  ),
  'blurb' => array(
    'order' => 10,
    'label' => 'Blurb',
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
    'name' => 'blurb',
    '_tableName' => 'blog',
  ),
  'content' => array(
    'order' => '11',
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
    'fieldHeight' => '250',
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
    '_tableName' => 'blog',
  ),
);
?>