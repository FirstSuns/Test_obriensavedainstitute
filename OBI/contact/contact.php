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
<?php
  


    $not_a_robot = '';
    $success = '';
    $arrError = array();  

 if (isset($_POST['submit'])) {
    
  
    if( !isset($_POST['firstname']) || ( isset($_POST['firstname'])  && empty($_POST['firstname']))) {
        $arrError['firstname'] = '<div class ="c-error">Please Enter First Name</div>';
    }
    if( !isset($_POST['lastname']) || ( isset($_POST['lastname'])  && empty($_POST['lastname']))) {
        $arrError['lastname'] = '<div class ="c-error">Please Enter Last Name</div>';
    }
   if(isset($_POST['phone']) && empty($_POST['phone']) || !isset($_POST['phone'])){
      $arrError['phone'] ='<div class ="c-error">Please Enter Phone Number</div>';
    } 
    if(isset($_POST['email']) && empty($_POST['email'])){
      $arrError['email'] = '<div class ="c-error">Please Enter Email</div>';
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $arrError['email'] = '<div class ="c-error">Please Enter Valid Email Address </div>';
    }
	
	if( !isset($_POST['message']) || ( isset($_POST['message'])  && empty($_POST['message']))) {
		$arrError['message'] = '<div class ="c-error">Please Enter Your Message</div>';
	}
	
	
	
    //your site secret key
        $secret = '6LePxwcUAAAAAHogvl0tYWFB63iJ-AJCjTQrSffT';
        //get verify response data

        //$verifyResponse = get_content('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success) {
            $not_a_robot = '<div class ="c-error">Please select I am not a robot and prove that you are human.</div>'; 
        }
        
        
        if(isset($arrError) && is_array($arrError) && count($arrError) == 0 && $not_a_robot == '')    {

            $to = "info@obriensavedainstitute.org";
                        
            $subject = "New Contact Request";
            
            $message = "
                
                <html>
                    <body>
                        <p><b>New Contact Request Details Below</b></p>
                        <br>
                        <table>
                            <tr>
                                <td><b>First Name</b></td>                                
                                <td>".$_POST['firstname']."</td>
                            </tr>
                            <tr>
                                <td><b>Last Name</b></td>               
                                <td>".$_POST['lastname']."</td>
                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>                
                                <td>".$_POST['phone']."</td>
                            </tr>
                            <tr>
                                <td><b>email</b></td>              
                                <td>".$_POST['email']."</td>
                            </tr>
							<tr>
                                <td colspan='2'><b>Message:</b><br><br>".$_POST['message']."</td>
                            </tr>
							
                            
                        </table>
                        <br><br>

                        <p>Thanks ......</p>        
                    </body>
                </html>
                
            
            ";
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers.= 'From:info@sitemedia.com'. "\r\n";
            mail($to,$subject,$message,$headers);
            
            header("location:?mode=done");
        
        


 }
}

?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($contact_usRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($contact_usRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($contact_usRecord['meta_keywords']) ?>" />
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>
<script src="/js/mobile_number_script.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<script>
         var recaptcha1;
        var myCallBack = function() {
            
            //Render the recaptcha1 on the element with ID "recaptcha1"
            recaptcha1 = grecaptcha.render('g-recaptcha', {
              'sitekey' : '6LePxwcUAAAAALmudwVqcu1FKXkP1BDhiYeuf7_o', //Replace this with your Site key
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
</head>
<style type="text/css">
    .c-error {
        color:red;
        margin-left:5px;
        font-size:16px;
        font-weight:bold;
    }
</style>
<?php 
	if(isset($arrError) && is_array($arrError) && count($arrError) > 0 || isset($_GET['mode']) && $_GET['mode'] == 'done'){ ?> 
		<script>
			$(document).ready(function(){
				$("html, body").animate({ scrollTop: 400 }, "slow");	
			});			
		</script>
	<?php 
	}
?>
<body>
<?php include '../includes/header.php';?>
<div class="royalSlider rsDefault">
    

<?php foreach ($contact_usRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext2">CONTACT US
    <div class="billboardsubtext"><?php echo htmlencode($upload['info1']) ?></div>
    </div>
    <img class="rsImg c-img-contact rsMainSlideImage" src="<?php echo htmlencode($upload['urlPath']) ?>" />
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
	$( function() {
			$( "#datepicker" ).datepicker({dateFormat: "mm/dd/yy"});
			 } );
</script>
<div class="greenbarsub">
		<div class="wrapper">
		<?php if(isset($contact_usRecord['sub_text']) && !empty($contact_usRecord['sub_text'])) { echo htmlencode($contact_usRecord['sub_text']); } ?></div><br>
	</div>
	
   <?php 
	if(isset($_GET['mode']) && $_GET['mode'] == 'done') { ?>
		<div style="text-align: center;"><h4>Thank You For Contacting Us!</h4>   
		<p style="font-size: 25px;">One of our team members will contact you shortly.</p>
		</div>
		<?php 
	}  else { ?>
		<div class="programssub">
			<div class="wrapper">
				<div class="toolbox">
					<div class="toolboxheader"><img src="../images/arrowsgreen.png" width="25" height="24" alt="" style="vertical-align: middle"/> TOOLBOX</div>
					<a href="../apply"> <div class="toolboxitem">Apply Now</div></a>
					<a href="<../tour"> <div class="toolboxitem">Schedule Tour</div></a>
					<?php foreach ($contact_us_pagesRecords as $record): ?>
					<a href="<?php echo $record['_link'] ?>"> <div class="toolboxitem"><?php echo htmlencode($record['title']) ?></div></a>
					<?php endforeach ?>

				</div><?php echo $contact_usRecord['content']; ?>
				<form id="requestinfoform" class="form" action="" name="form" method="post">

					<div class="formfield">
						<label class="contactform" for="firstname">First Name<span class="c-error">*</span></label><br />
						<input id="firstname" name="firstname" type="text" class="textfield1" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" placeholder="First Name" /> 
						<br>
						<?php 
						if(isset($arrError['firstname'])) {
						echo $arrError['firstname'];
						}
						?> 
					</div>



					<div class="formfield">
						<label class="contactform" for="lastname">Last Name<span class="c-error">*</span></label><br />
						<input id="lastname" name="lastname" type="text" class="textfield1"  value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>" placeholder="Last Name" /><br>

						<?php 
						if(isset($arrError['lastname'])) {
						echo $arrError['lastname'];
						}
						?>   
					</div><br>
					<div class="formfield">
						<label class="contactform" for="phone">Phone Number<span class="c-error">*</span></label><br />
						<input id="phone" type="text" onkeypress="return isNumberKey(event);" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" name="phone" class="textfield1" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>" placeholder="Phone Number" /><br>

						<?php 
						if(isset($arrError['phone'])) {
						echo $arrError['phone'];
						}
						?> 
					</div><br>


					<div class="formfield">
						<label class="contactform" for="email">Email<span class="c-error">*</span></label><br />
						<input id="email" name="email" type="text" class="textfield1" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" placeholder="Email" /><br>
						<?php 
						if(isset($arrError['email'])) {
						echo $arrError['email'];
						}
						?>
					</div><br>
					<div class="formfield2">
						<label class="contactform" for="message">Message<span class="c-error">*</span></label><br />
						<textarea id="message" name="message" type="text" class="textfield1 c-message" placeholder="Message"><?php if(isset($_POST['message'])){echo $_POST['message'];}?></textarea><br>
						<?php 
						if(isset($arrError['message'])) {
						echo $arrError['message'];
						}
						?>
					</div>
					<div style="clear: both;"></div>
					<div class="formfield">
					<div id="g-recaptcha" data-sitekey="6LePxwcUAAAAALmudwVqcu1FKXkP1BDhiYeuf7_o"></div>
					<div class="error c-captcha"><?php if(isset($not_a_robot) && !empty($not_a_robot)) { echo $not_a_robot;}?></div>
					</div>
					<br>
					<div class="formfield2">
					<input type="submit" value="Submit" id="submit" name="submit" class="formbutton" /> <br /> <em>*Required field</em></div>


				</form>
				<div style="clear: both;"></div> 
			</div>
		</div>

		<?php
	}
?>

</div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>