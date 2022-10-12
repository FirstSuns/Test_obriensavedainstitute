<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
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
  '_perPageDefault' => 1000,
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => '_email_templates',
  'listPageFields' => '_template_summary_, _message_summary_',
  'listPageOrder' => 'template_id',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '1',
  'menuName' => 'Email Templates',
  'menuOrder' => '17',
  'menuType' => '',
  'tableHidden' => '1',
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
  'template_id' => array(
    'order' => 6,
    'label' => 'Template ID',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => 'Add -XX <a href="?menu=admin&action=general#language">language code</a> suffix for translations',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '1',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'description' => array(
    'order' => 7,
    'label' => 'Description',
    'type' => 'textfield',
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
  '__separator001__' => array(
    'order' => 8,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Email Template',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'from' => array(
    'order' => 9,
    'label' => 'From',
    'type' => 'textfield',
    'defaultValue' => '#settings.adminEmail#',
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
  'reply-to' => array(
    'order' => 10,
    'label' => 'Reply-To',
    'type' => 'textfield',
    'indexed' => '',
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
  'to' => array(
    'order' => 11,
    'label' => 'To',
    'type' => 'textfield',
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
  'cc' => array(
    'order' => 12,
    'label' => 'CC',
    'type' => 'textfield',
    'indexed' => '',
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
  'bcc' => array(
    'order' => 13,
    'label' => 'BCC',
    'type' => 'textfield',
    'indexed' => '',
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
  'subject' => array(
    'order' => 15,
    'label' => 'Subject',
    'type' => 'textfield',
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
  'html' => array(
    'order' => 16,
    'label' => 'Message HTML',
    'type' => 'wysiwyg',
    'fieldPrefix' => '',
    'description' => '',
    'defaultContent' => '',
    'allowUploads' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '400',
    'allowedExtensions' => 'gif,jpg,jpeg,png,wmv,mov,swf,pdf',
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
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
  '__separator002__' => array(
    'order' => 17,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Instructions (DO NOT MODIFY)',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'placeholders' => array(
    'order' => 18,
    'label' => 'Placeholders',
    'type' => 'textbox',
    'defaultContent' => 'Note: This section will be automatically updated with a full list of available placeholders the first time this template is used to send a message.

The following global placeholders are always available:
#server.http_host#
#server.remote_addr#
#settings.adminEmail#
#settings.adminUrl#
#settings.programName#',
    'fieldPrefix' => 'These placeholders can be used in the following fields: from, to, subject, message',
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