<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'guest_services'
  list($guest_servicesRecords, $guest_servicesMetaData) = getRecords(array(
    'tableName'   => 'guest_services',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $guest_servicesRecord = @$guest_servicesRecords[0]; 

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($guest_servicesRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($guest_servicesRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($guest_servicesRecord['meta_keywords']) ?>" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>
<script src="../jQueryAssets/jquery.ui-1.10.4.accordion.min.js"></script>
</head>

<body>
<?php include '../includes/header.php';?>
<div class="royalSlider rsDefault">
    
<?php foreach ($guest_servicesRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext2" style="color:<?php echo htmlencode($upload['info2']) ?>">SERVICES
    <div class="billboardsubtext" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($upload['info1']) ?></div>
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
<?php echo htmlencode($guest_servicesRecord['sub_text']) ?></div></div>
<div class="programssub">
<div class="wrapper">
<?php echo $guest_servicesRecord['content']; ?>
	<div id="Accordion1">
	<?php foreach ($services_listRecords as $record): ?><h3 ><a href="#" class="AccoClass" data-target="<?php echo $record['num']?>" id="<?php echo $record['num']?>"><?php echo htmlencode($record['title']) ?></a></h3>
		  <div>
			<p><?php echo $record['content']; ?></p>
		  </div>
		 <?php endforeach ?>
	     </div>
<div style="clear: both;"></div> 
</div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion({ 

heightStyle: "content" 

}); 

});

$(document).ready(function(){
	
	
	$(".AccoClass").prev().addClass('AddSpanClass');
	
	$('.AccoClass,.AddSpanClass').click(function(event) {
		event.preventDefault();
		var target = "#" + $(this).attr('data-target');		
		$('html, body').animate({
			scrollTop: $(".programssub").offset().top 
		}, 300);
	});	
	
});
</script>
</body>
</html>