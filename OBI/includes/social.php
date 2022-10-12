<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }


  list($blogRecords, $blogMetaData) = getRecords(array(
    'tableName'   => 'blog',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  $blogRecord = @$blogRecords[0]; 

?>
<div class="socialfeed">CONNECT WITH US @
<div class="socialicons">

<a href="https://www.pinterest.com/obriensavedainstitute/" target="_blank"><div class="socialicon2" style="background-image: url(../images/pintrest2.png)"></div></a>
<a href="https://www.instagram.com/avedainstitutevt" target="_blank"><div class="socialicon2" style="background-image: url(../images/instagram2.png)"></div></a>
<a href="https://twitter.com/avedavt" target="_blank"><div class="socialicon2" style="background-image: url(../images/twitter2.png)"></div></a>
<a href="https://www.facebook.com/obriensAvedaInstitute/" target="_blank"><div class="socialicon2" style="background-image: url(../images/facebook2.png)"></div></a>
	<div style="clear: both;"></div> 
</div>
<div style="background-color: #363636;">
<?php foreach ($blogRecords as $record): ?>
<a href="<?php echo $record['_link'] ?>">
<div class="socialpost" <?php foreach ($record['image'] as $index => $upload): ?>style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>)"<?php endforeach ?>><div class="socialtitle"><?php echo htmlencode($record['title']) ?></div></div>
</a>
 <?php endforeach ?>
<div style="clear: both;"></div> 
</div>

<div style="clear: both;"></div> 
</div>