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
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'tour_requests',
  'listPageFields' => 'createdDate, firstname, lastname, phone, email, city, state',
  'listPageOrder' => 'createdDate DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Tour Requests',
  'menuOrder' => '0000000022',
  'menuPrefixIcon' => '',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
    'name' => 'num',
    '_tableName' => 'tour_requests',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
    'name' => 'createdDate',
    '_tableName' => 'tour_requests',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
    'name' => 'createdByUserNum',
    '_tableName' => 'tour_requests',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
    'name' => 'updatedDate',
    '_tableName' => 'tour_requests',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
    'name' => 'updatedByUserNum',
    '_tableName' => 'tour_requests',
  ),
  'firstname' => array(
    'order' => 6,
    'label' => 'Firstname',
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
    '_tableName' => 'tour_requests',
  ),
  'lastname' => array(
    'order' => 7,
    'label' => 'Lastname',
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
    '_tableName' => 'tour_requests',
  ),
  'phone' => array(
    'order' => 8,
    'label' => 'Phone',
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
    '_tableName' => 'tour_requests',
  ),
  'email' => array(
    'order' => 9,
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
    '_tableName' => 'tour_requests',
  ),
  'address' => array(
    'order' => 10,
    'label' => 'Address',
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
    'name' => 'address',
    '_tableName' => 'tour_requests',
  ),
  'city' => array(
    'order' => 11,
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
    '_tableName' => 'tour_requests',
  ),
  'state' => array(
    'order' => '12',
    'label' => 'State',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'AL
AK
AZ
AR
CA
CO
CT
DE
DC
FL
GA
HI
ID
IL
IN
IA
KS
KY
LA
ME
MD
MA
MI
MN
MS
MO
MT
NE
NV
NH
NJ
NM
NY
NC
ND
OH
OK
OR
PA
RI
SC
SD
TN
TX
UT
VT
VA
WA
WV
WI
WY',
    'name' => 'state',
    '_tableName' => 'tour_requests',
  ),
  'zip' => array(
    'order' => 13,
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
    '_tableName' => 'tour_requests',
  ),
  'program' => array(
    'order' => 14,
    'label' => 'Program',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'Cosmetology
Barbering
Esthetics',
    'name' => 'program',
    '_tableName' => 'tour_requests',
  ),
  'startdate' => array(
    'order' => 15,
    'label' => 'Startdate',
    'type' => 'date',
    'indexed' => '0',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => '',
    'defaultDateString' => '2018-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '1',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
    'name' => 'startdate',
    '_tableName' => 'tour_requests',
  ),
  'tour' => array(
    'order' => 16,
    'label' => 'Tour',
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
    'name' => 'tour',
    '_tableName' => 'tour_requests',
  ),
  'hear' => array(
    'order' => 17,
    'label' => 'Hear',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'Career Fair/High School Visit
Event
Facebook
Radio
Salon
Sevendays
Twitter
TV
 Word of Mouth',
    'name' => 'hear',
    '_tableName' => 'tour_requests',
  ),
  'hearother' => array(
    'order' => 18,
    'label' => 'Hearother',
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
    'name' => 'hearother',
    '_tableName' => 'tour_requests',
  ),
);
?>