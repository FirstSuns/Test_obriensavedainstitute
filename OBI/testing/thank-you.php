<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */

  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'contact_us'
  list($contact_usRecords, $contact_usMetaData) = getRecords(array(
    'tableName'   => 'contact_us',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $contact_usRecord = @$contact_usRecords[0]; // get first record

 // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'contact_us_pages'
  list($contact_us_pagesRecords, $contact_us_pagesMetaData) = getRecords(array(
    'tableName'   => 'contact_us_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testing | </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />


    <link rel="stylesheet" href="../royalslider/royalslider2.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lato" rel="stylesheet">
    <link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/main.css"  type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/theme_1_animation_1.css">
    <link rel="stylesheet" href="../css/responsive.css">


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <!-- <script src="https://js.stripe.com/v3/"></script> -->
    <script src = "https://checkout.stripe.com/checkout.js"></script>
    <script src='../royalslider/jquery-1.8.3.min.js'></script>
    <script src="../royalslider/jquery.royalslider.min.js"></script>
    <script src="/js/mobile_number_script.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
    <script>
            var recaptcha1;
            var myCallBack = function() {

                //Render the recaptcha1 on the element with ID "recaptcha1"
                recaptcha1 = grecaptcha.render('g-recaptcha', {
                  'sitekey' : '6LfvkIIUAAAAAOxIsnyV1fPpDhV25K97tK27aUNr', //Replace this with your Site key
                  'theme' : 'light',
                  'callback' : correctrecaptcha1
                });

              };
              var isValidateRecaptcha1 = false;
              var correctrecaptcha1 = function(response) {

                    console.log(response);
                    isValidateRecaptcha1 = true;
              };
              </script>
    <?php if(isset($arrError) && is_array($arrError) && count($arrError) > 0 && $not_a_robot != '')    { ?>
    	<script>
    			$(document).ready(function(){
    				$("html, body").animate({ scrollTop: 600 }, "slow");
    			});
    		</script>
    <?php } ?>
    <!--  -->


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap');
       body {
	  background-color: #f7f7f7;
      }
      .c-error {
          color:red;
          margin-left:5px;
          font-size:16px;
          font-weight:bold;
      }
  	.c-img-contactRE {
  		width: 1349px;
  		height: 850px;
  		margin-left: 0px;
  		margin-top: -350px;
  	}
  	.c-message {
  		height:150px;
  	}
    </style>
  </head>
  <body>
    <?php include '../includes/header.php';?>
    <div style="height:200px;"></div>
    	<div class="programssub">
    		<div class="wrapper">
   <div class="container" style="margin: 0 auto;padding-top:100px;text-align:center;">
      <img src="done.png" alt="" style="width:300px;padding-bottom:20px;">
      <br>
      <strong style="font-size:40px;padding: 50px;">Thank you for your payment! When we receive approval you will be emailed with a date and time of testing.</strong>
    </div>
  </div>
  <br>
</div>


  <?php include '../includes/social2.php';?>
  <?php include '../includes/quiz.php';?>
  <?php include '../includes/footer.php';?>
 </body>
</html>
