<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'home_page'
  list($home_pageRecords, $home_pageMetaData) = getRecords(array(
    'tableName'   => 'home_page',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $home_pageRecord = @$home_pageRecords[0]; 

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($home_pageRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($home_pageRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($home_pageRecord['meta_keywords']) ?>" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="css/main.css?<?php echo time();?>">
<link rel="stylesheet" href="css/media_s.css?<?php echo time();?>">
<link rel="stylesheet" href="royalslider/royalslider.css">
<link rel="stylesheet" href="royalslider/skins/default/rs-default.css">
<script src='royalslider/jquery-1.8.3.min.js'></script>
<script src="royalslider/jquery.royalslider.min.js"></script>
<script src="js/mobile_number_script.js"></script>

<style type="text/css">
#overlay {
	position: fixed;
	display: none;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(0,0,0,0.5);
	z-index: 9999999999;
	cursor: pointer;
}
.play-video {
margin-top:0px;

}
#myBtn {
    cursor: pointer;
	z-index: 99999999999;
	position:absolute;
	right:100px;
	bottom:50px;
}
#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>
</head>

<body>
<?php include 'includes/header.php';?>
<?php include 'includes/billboard.php';?>
<div class="greenbar">OUR PROGRAMS</div>
<div class="programs">
<div class="wrapper">
		 <?php foreach ($programsRecords as $record): ?>
<div class="programbox" style="display:<?php echo $record['hide:text'] ?>">

	<div class="programimg" <?php foreach ($record['program_image'] as $index => $upload): ?>style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>)"<?php endforeach ?>></div>

	<div style="clear: both;"></div> 
<div>
	<h3><?php echo htmlencode($record['title']) ?></h3></div>
<p>
<?php echo htmlencode($record['summary']) ?></p>
   <a href="<?php echo $record['_link'] ?>"><img src="images/arrow2.png" width="50" height="51" alt=""/></a></p>

 
</div>
 <?php endforeach ?>
<div style="clear: both;"></div> 
</div>
</div>

<!--
<div class="videobox">

<video style="width:100%; opacity:0.6;" autoplay muted loop>
  <source src="OBriens+Aveda+Institute+Promo+v3+HD.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

 <div class="watchvideo player-buttons">
	 <div class="video22">THE AVEDA DIFFERENCE</div>
	<img src="images/play.png" width="80" height="80" alt="" class="play-video"/><p class="play-video">Watch Video</p>
</div>

</div>
-->
<?php include 'includes/social.php';?>
<?php include 'includes/quiz.php';?>
<?php include 'includes/footer.php';?>
<div id="overlay">
  <div id="body"></div>
</div>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3de9d3b80471dd00752e919f8/5b5f4b77c16bf3d5eae887f5d.js");</script>
<script type="text/javascript">
		function myFunction() {
			$('#overlay #body').html('');
			$('#overlay').hide();
		}
	$(document).ready(function(){
		
		$('.play-video').click(function() {
			$('#overlay #body').html('<video style="width:100%" height="98%" autoplay controls  loop><source src="OBriens+Aveda+Institute+Promo+v3+HD.mp4" type="video/mp4">Your browser does not support the video tag.</video> <button id="myBtn" class="topbutton2" onclick="myFunction()">CLOSE</button>');
			$('#overlay').show();
		});
	});
</script>

</body>
</html>