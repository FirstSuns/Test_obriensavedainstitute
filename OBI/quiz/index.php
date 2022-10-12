<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'programs_overview'
  list($programs_overviewRecords, $programs_overviewMetaData) = getRecords(array(
    'tableName'   => 'programs_overview',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $programs_overviewRecord = @$programs_overviewRecords[0]; 
// load record from 'programs_overview'
  list($blogRecords, $blogMetaData) = getRecords(array(
    'tableName'   => 'blog',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  $blogRecord = @$blogRecords[0]; 

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Career Quiz | O'Briens Aveda Institute | So. Burlington, VT</title>
<meta name="description" content="O'Briens Aveda Institute prepares its students to graduate from its institution to become successful professionals in the fields of cosmetology, barbering,and spa therapy.The O'Briens have been in the cosmetology business for over 60 years. Starting in the early 1950's, they were the first to open first floor locations next to high-end retail stores, developing new concepts such as `no appointment necessary' walk-in services. At that time the cosmetology business was in a state of expansion and there was need for young skilled stylists." />
<meta name="keywords" content="aveda, cosmetology, beauty salon vermont, aveda, avada, esthiology, cosmetology classes vermont, esthiology classes Burlington, aveda Burlington, cosmetology Burlington, aveda institute, Vermont Beauty School, Burlington Beauty School, Aveda Beauty School" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>

</head>

<body>
<?php include '../includes/header.php';?>
<div style="clear: both;"></div>

<div class="quizsub">
<div class="wrapper">
<h5>CAREER QUIZ</h5>
FIND OUT WHAT CAREER IN COSMOTOLOGY BEST FITS YOUR PASSION.
<div style="clear: both; height:40px;"></div>
<a href="../quiz/step2.php"><div class="quizbutton2">GET STARTED</div></a><div style="clear: both;"></div></div>
<div style="font-size:12px; margin-top:30px">By submitting this form you agree to receive promotional and event emails from O'Briens Aveda Institute.</div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>