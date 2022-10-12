<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'billboard'
  list($billboardRecords, $billboardMetaData) = getRecords(array(
    'tableName'   => 'billboard',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<div class="royalSlider rsDefault">
    <?php foreach ($billboardRecords as $record): ?>
<?php foreach ($record['billboard_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($record['title']) ?>
    <div class="billboardsubtext" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($record['sub_header']) ?></div>
    <img src="../images/arrow.png" width="69" height="69" alt=""/> </div>
    <img class="rsImg" src="<?php echo htmlencode($upload['urlPath']) ?>" />
    </div>
<?php endforeach ?>
<?php endforeach ?>

    <?php if (!$billboardRecords): ?>
      No records were found!<br/><br/>
    <?php endif ?>

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