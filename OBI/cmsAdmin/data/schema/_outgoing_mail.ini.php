<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
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
  '_perPageDefault' => 1000,
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => '_outgoing_mail',
  'listPageFields' => '_message_summary_, sent, backgroundSend',
  'listPageOrder' => 'createdDate DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '1',
  'menuName' => 'Outgoing Mail',
  'menuOrder' => '5',
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
    'label' => 'Created Date',
    'type' => 'none',
    'isSystemField' => '1',
  ),
  'from' => array(
    'order' => 3,
    'label' => 'From',
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
  'reply-to' => array(
    'order' => 4,
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
    'order' => 5,
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
    'order' => 6,
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
    'order' => 7,
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
    'order' => 8,
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
    'order' => 9,
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
    'checkMaxUploadSize' => '0',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '0',
    'maxUploads' => '25',
    'resizeOversizedImages' => '0',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '0',
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
  'text' => array(
    'order' => 10,
    'label' => 'Message Text',
    'type' => 'textbox',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '350',
    'autoFormat' => '0',
  ),
  '__separator001__' => array(
    'order' => 11,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  '__separator002__' => array(
    'order' => 12,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Internal Fields',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'sent' => array(
    'order' => 13,
    'label' => 'Sent',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2012-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '1',
    'use24HourFormat' => '0',
    'yearRangeStart' => '2010',
    'yearRangeEnd' => '2020',
  ),
  'headers' => array(
    'order' => 14,
    'label' => 'Message Headers',
    'type' => 'textbox',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
  ),
  'customData' => array(
    'order' => 15,
    'label' => 'Custom Data',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'backgroundSend' => array(
    'order' => 16,
    'label' => 'Background Send',
    'type' => 'checkbox',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => 'Queue message to be sent by background mailer (for high-volume mail)',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
);
?>