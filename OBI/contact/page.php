<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'contact_us_pages'
  list($contact_us_pagesRecords, $contact_us_pagesMetaData) = getRecords(array(
    'tableName'   => 'contact_us_pages',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $contact_us_pagesRecord = @$contact_us_pagesRecords[0]; 
?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'contact_us_pages'
  list($contact_us_pagesRecords, $contact_us_pagesMetaData) = getRecords(array(
    'tableName'   => 'contact_us_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($contact_us_pagesRecord['title']) ?> | O'Briens Aveda Institute | So. Burlington, VT</title>
<title><?php echo htmlencode($contact_us_pagesRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($contact_us_pagesRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($contact_us_pagesRecord['meta_keywords']) ?>" />

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
<div class="royalSlider rsDefault">
    
<?php foreach ($contact_us_pagesRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info3']) ?>">
    <div class="billboardtext2"style="color:<?php echo htmlencode($upload['info3']) ?>"><?php echo htmlencode($contact_us_pagesRecord['title']) ?>
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
<?php echo htmlencode($contact_us_pagesRecord['sub_text']) ?></div></div>
<div class="programssub">
<div class="wrapper">
	<div class="toolbox">
		<div class="toolboxheader"><img src="../images/arrowsgreen.png" width="25" height="24" alt="" style="vertical-align: middle"/> TOOLBOX</div>
<a href="../apply"> <div class="toolboxitem">Apply Now</div></a>
					<a href="<../tour"> <div class="toolboxitem">Schedule Tour</div></a>
<?php foreach ($contact_us_pagesRecords as $record): ?>
	 <a href="<?php echo $record['_link'] ?>"> <div class="toolboxitem"><?php echo htmlencode($record['title']) ?></div></a>
		<?php endforeach ?>	
<a href="../transcript-request"> <div class="toolboxitem">Transcript Request</div></a>	
	</div>
<?php echo $contact_us_pagesRecord['content']; ?> <div style="clear: both;"></div> 
</div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>