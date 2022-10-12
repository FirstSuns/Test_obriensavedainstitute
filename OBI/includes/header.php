<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  list($admissions_pagesRecords, $admissions_pagesMetaData) = getRecords(array(
    'tableName'   => 'admissions_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

list($programsRecords, $programsMetaData) = getRecords(array(
    'tableName'   => 'programs',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
list($services_listRecords, $services_listMetaData) = getRecords(array(
    'tableName'   => 'services_list',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
list($about_us_pagesRecords, $about_us_pagesMetaData) = getRecords(array(
    'tableName'   => 'about_us_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

list($guest_servicesRecords, $guest_servicesMetaData) = getRecords(array(
    'tableName'   => 'guest_services',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

 list($admissions_pagesRecords, $admissions_pagesMetaData) = getRecords(array(
    'tableName'   => 'admissions_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

 list($aveda_difference_pagesRecords, $aveda_difference_pagesMetaData) = getRecords(array(
    'tableName'   => 'aveda_difference_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155768146-1"></script>
<script>
	$(document).ready(function(){
		$(".collapse_menu").click(function(){
			$(".nav").slideToggle(500);
		});
	});
window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-155768146-1');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<div class="header">

<div class="topbar"><div class="wrapper">
<div class="phone"><span class="greentext">p:</span> 802.876.7044  <span class="greentext">f:</span> 802.876.7388</div> 
<a href="https://www.pinterest.com/obriensavedainstitute/" target="_blank"><div class="socialicon" style="background-image: url(../images/pintrest.png)"></div></a>
<a href="https://www.instagram.com/avedainstitutevt" target="_blank"><div class="socialicon" style="background-image: url(../images/instagram.png)"></div></a>
<a href="https://twitter.com/avedavt" target="_blank"><div class="socialicon" style="background-image: url(../images/twitter.png)"></div></a>
<a href="https://www.facebook.com/obriensAvedaInstitute/" target="_blank"><div class="socialicon" style="background-image: url(../images/facebook.png)"></div></a>

<a href="../apply"><div class="topbutton2">Apply Now</div></a>
<a href="../tour"><div class="topbutton1">Schedule Tour</div></a>
<a href="../testing"><div class="topbutton1" style="margin-right:10px;">State Board Test</div></a>



<div style="clear: both;"></div> 
</div>

</div>
	
	<div class="navbar">
		<div class="wrapper"><div class="logo"><a href="../"><img src="../images/logo.png" width="351" height="80" alt="O'Briens Aveda Institute"/></a></div>
			<img src="../images/menu.png" class="collapse_menu">
			<div class="nav">
				<div class="navitem"><a href="../programs">PROGRAMS</a></div>
				<div class="navitem"><a href="../admissions">ADMISSIONS</a></div>
				<div class="navitem"><a href="../services">SERVICES</a></div>
				<div class="navitem"><a href="../about">ABOUT</a></div>
				<div class="navitem"><a href="../blog">BLOG</a></div>
				<div class="navitem"><a href="../contact">CONTACT</a></div>
			</div>
			<div style="clear: both;"></div>          
		</div>
	</div>
</div>



