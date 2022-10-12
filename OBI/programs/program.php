<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'programs'
  list($programsRecords, $programsMetaData) = getRecords(array(
    'tableName'   => 'programs',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $programsRecord = @$programsRecords[0]; 

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($programsRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($programsRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($programsRecord['meta_keywords']) ?>" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.tabs.min.js"></script>
	<style>
		.c-billboardtext2-delete {
			top:24% !important;
		}
	</style>
</head>

<body>
<?php include '../includes/header.php';?>
<div class="royalSlider rsDefault">
    
<?php foreach ($programsRecord['program_image'] as $index => $upload): ?>

  <div >
    <div class="billboardtext2 c-billboardtext2" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($programsRecord['title']) ?>
    </div>
     <img class="rsImg" src="<?php echo htmlencode($upload['urlPath']) ?>" />

    </div>

<?php endforeach ?>

</div>
<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({
            // options go here
            // as an example, enable keyboard arrows nav
            keyboardNavEnabled: true,
			autoScaleSlider: false,
			imageScaleMode: 'fill',
			arrowsNav: false,
			controlNavigation: 'none',
			transitionType: 'fade',
			autoPlay: {
    		enabled: true,
    		pauseOnHover: false,
				delay: 3000,
    	}
        });  
    });
</script>
<div class="greenbarsub">
<div class="wrapper">
<?php echo htmlencode($programsRecord['sub_text']) ?></div><br /><br /></div>
<div class="programssub">
<div class="wrapper">

<div id="Tabs1">
  <ul>
    <li><a href="#tabs-1"><img src="../images/arrowsblack.png" width="25" height="24" alt="" style="vertical-align: middle"/> PROGRAM DETAILS</a></li>
    <li><a href="#tabs-2"><img src="../images/arrowsblack.png" width="25" height="24" alt="" style="vertical-align: middle"/> CLASS START DATES</a></li>
  </ul>
  <div id="tabs-1">
 <?php echo $programsRecord['content']; ?>   
  </div>
  <div id="tabs-2">
    <p><?php echo $programsRecord['class_start_times']; ?></p>
  </div>
  </div><div style="clear: both;"></div> 


</div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>