<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */

  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'schedule_tour'
  list($schedule_tourRecords, $schedule_tourMetaData) = getRecords(array(
    'tableName'   => 'schedule_tour',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $schedule_tourRecord = @$schedule_tourRecords[0]; // get first record


// load viewer library
    $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
    $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
    foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
    if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

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

    if( !isset($_POST['program']) || ( isset($_POST['program'])  && empty($_POST['program']))) {
        $arrError['program'] = '<div class ="c-error">Please Enter Program</div>';
    }
  
    if(isset($_POST['hear']) && empty($_POST['hear']) || !isset($_POST['hear'])){
      $arrError['hear'] ='<div class ="c-error">Please Enter Hear</div>';
    }
     if(isset($_POST['hearother']) && empty($_POST['hearother']) || !isset($_POST['hearother'])){
      //$arrError['hearother'] ='<div class ="c-error">Please Enter Hearother</div>';
    }

    //your site secret key
        $secret = '6LfvkIIUAAAAABt8NACRemyblhLBYMgzH5_ms5xX';
        //get verify response data

        //$verifyResponse = get_content('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success) {
            $not_a_robot = '<div class ="c-error">Please select I am not a robot and prove that you are human.</div>';
        }


        if(isset($arrError) && is_array($arrError) && count($arrError) == 0 && $not_a_robot == '')    {

            $query = "INSERT INTO `cmsb_tour_requests` SET ";
            $query.= "`createdDate` ='".date('Y-m-d H:i:s')."', ";
            $query.= "`createdByUserNum` ='1',";
            $query.= "`updatedDate` ='".date('Y-m-d H:i:s')."', ";
            $query.= "`updatedByUserNum` ='1', ";
            $query.= "`firstname` ='".mysql_real_escape_string($_POST['firstname']) ."', ";
            $query.= "`lastname` ='".mysql_real_escape_string($_POST['lastname']) ."', ";
            $query.= "`phone` ='".mysql_real_escape_string($_POST['phone']) ."', ";
            $query.= "`email` ='".mysql_real_escape_string($_POST['email']) ."', ";
            $query.= "`program` ='".mysql_real_escape_string($_POST['program']) ."', ";
            $query.= "`hear` ='".mysql_real_escape_string($_POST['hear']) ."', ";
            $query.= "`hearother`='".mysql_real_escape_string($_POST['hearother'])."' ";
            $runQuery = mysql_query( $query );

 //            $to = "admissions@obriensavedainstitute.org";
 // $bcc = "sem@s2smedia.net";
 //            $subject = "New Tour Request";
 //            $message = "
 //
 //                <html>
 //                    <body>
 //                        <p><b>New Tour Request Details Below</b></p>
 //                        <br>
 //                        <table>
 //                            <tr>
 //                                <td><b>First Name</b></td>
 //                                <td>".$_POST['firstname']."</td>
 //                            </tr>
 //                            <tr>
 //                                <td><b>Last Name</b></td>
 //                                <td>".$_POST['lastname']."</td>
 //                            </tr>
 //                            <tr>
 //                                <td><b>Phone Number</b></td>
 //                                <td>".$_POST['phone']."</td>
 //                            </tr>
 //                            <tr>
 //                                <td><b>Email</b></td>
 //                                <td>".$_POST['email']."</td>
 //                            </tr>
 //
 //                            <tr>
 //                                <td><b>Program</b></td>
 //                                <td>".$_POST['program']."</td>
 //                            </tr>
 //                      
 //
 //                            <tr>
 //                                <td><b>Hear</b></td>
 //                                <td>".$_POST['hear']."</td>
 //                            </tr>
 //                            <tr>
 //                                <td><b>Hearother</b></td>
 //                                <td>".$_POST['hearother']."</td>
 //                            </tr>
 //
 //                        </table>
 //                        <br><br>
 //
 //                        <p>Thanks ......</p>
 //                    </body>
 //                </html>
 //            ";
 //
 //            $headers = "MIME-Version: 1.0" . "\r\n";
 //            $headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
 //            $headers.= 'From:info@obriensavedainstitute.org'. "\r\n";
 //
	// 	if(!mail($to,$subject,$message,$headers)){
 //            		echo '<script type="text/javascript">alert("Error")<script>';
	// 	} else {
	// 		header("location:?mode=done");
	// 	}


  // Mailer code
  $mail = new PHPMailer(true);
 
  $mail->From = "info@obriensavedainstitute.org"; //From Mail address
  $mail->FromName = $_POST['firstname']. " ". $_POST['lastname'] ;

  // SMTP Server.
  $mail->IsSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  $mail->SMTPAuth = true; 

  // Change These Accordingly To Send Mail.
  $mail->Username = 'info@obriensavedainstitute.org'; //Same as from mail address
  $mail->Password = 'oai-aveda2021';

  $mail->addAddress("admissions@obriensavedainstitute.org","O'Briens Aveda Institute");



  //Address To Which Recipient Will Reply. Change Accordingly
  $mail->addReplyTo("admissions@obriensavedainstitute.org", "Reply");


  //Send HTML or Plain Text email
  $mail->isHTML(true);

  $message = '<html><body>';
  $message .= '<p><b>New Tour Request Details Below</b></p>';
  $message .= '<br>';
  $message .= '<table><tr>';
  $message .= '<td><b>First Name</b></td><td>'.$_POST['firstname'].'</td></tr>';
  $message .= '<tr><td><b>Last Name</b></td><td>'.$_POST['lastname'].'</td></tr>';
  $message .= '<tr><td><b>Phone Number</b></td><td>'.$_POST['phone'].'</td></tr>';
  $message .= '<tr><td><b>Email</b></td><td>'.$_POST['email'].'</td></tr>';
  $message .= '<tr><td><b>Program</b></td><td>'.$_POST['program'].'</td></tr>';
  $message .= '<tr><td><b>Hear</b></td><td>'.$_POST['hear'].'</td></tr>';
  $message .= '<tr><td><b>Hearother</b></td><td>'.$_POST['hearother'].'</td></tr>';
  $message .= '</table>';
  $message .= '<br><br>';
  $message .= '<p>Thanks ......</p>';
  $message .= '</body></html>';

  //$mail->SMTPDebug = 3;

  $mail->Subject = "New Tour Request";
  $mail->Body = $message ;

    try {
      $mail->send();
        echo '<script>window.location="https://www.obriensavedainstitute.org/tour/?mode=done"</script>';
        //header("location:?mode=done");
      } catch (phpmailerException $e) {
        echo "Error occurred !!" .$e->errorMessage();
      }
 }
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($schedule_tourRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($schedule_tourRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($schedule_tourRecord['meta_keywords']) ?>" />

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

<?php foreach ($schedule_tourRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext2" style="color:<?php echo htmlencode($upload['info2']) ?>">SCHEDULE TOUR
    <div class="billboardsubtext" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($upload['info1']) ?></div>
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
<?php if(isset($schedule_tourRecord['sub_text']) && !empty($schedule_tourRecord['sub_text'])) { echo htmlencode($schedule_tourRecord['sub_text']); } ?>
</div></div>
    <?php if(isset($_GET['mode']) && $_GET['mode'] == 'done') { ?>
              <div style="text-align: center;"><h4>Thank You For Requesting a Tour!</h4>
        <p style="font-size: 25px;">One of our team members will contact you shortly.</p>
        </div>
    <?php }  else { ?>
<div class="programssub">
<div class="wrapper">
	<?php echo $schedule_tourRecord['content']; ?>
<form id="requestinfoform" name="form" class="form" action="" method="post">




<div class="formfield"><label class="contactform" for="firstname">First Name<span class="c-error">*</span></label><br />
<input id="firstname" name="firstname" type="text"  class="textfield1" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" placeholder="First Name" />
<br>
    <?php
    if(isset($arrError['firstname'])) {
       echo $arrError['firstname'];
    }
    ?>
  </div>

<div class="formfield">
<label class="contactform" for="lastname">Last Name<span class="c-error">*</span></label><br />
<input id="lastname" name="lastname" type="text" class="textfield1" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>" placeholder="Last Name" /><br>

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
<input id="email" name="email" type="text"  class="textfield1" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" placeholder="Email" /><br>
    <?php
        if(isset($arrError['email'])) {
           echo $arrError['email'];
        }
      ?>
    </div><br>






<!--

<div class="formfield2">
<label  for="tour">Would you like to schedule a tour?:<span class="c-error">*</span><br /></label>

      <select id="tour" name="tour" size="1" class="dropdown">
          <option value="">Select One</option>
          <option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Tuesday 11AM') { echo 'selected=selected';}?> value="Tuesday 11AM">Tuesday 11AM</option>
          <option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Tuesday 1PM') { echo 'selected=selected';}?> value="Tuesday 1PM">Tuesday 1PM</option>
<option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Tuesday 3PM') { echo 'selected=selected';}?> value="Tuesday 3PM">Tuesday 3PM</option>
<option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Wednesday 11AM') { echo 'selected=selected';}?> value="Wednesday 11AM">Wednesday 11AM</option>
          <option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Wednesday 1PM') { echo 'selected=selected';}?> value="Wednesday 1PM">Wednesday 1PM</option>
<option <?php if(isset($_POST['tour']) && $_POST['tour'] == 'Wednesday 3PM') { echo 'selected=selected';}?> value="Wednesday 3PM">Wednesday 3PM</option>
      </select>
      <?php
        if(isset($arrError['tour'])) {
           echo $arrError['tour'];
        }
      ?><br /><span style="font-size:12px; color:#AACA4A;">Note: Admissions will contact you by phone or email to confirm your tour time.</span>
    </div><br>-->
<div class="formfield2">
    <label class="contactform" for="program">Program Interested In:<span class="c-error">*</span></label><br />

      <select id="program" name="program" size="1" class="dropdown">
        <option value="">Select Program</option>
        <option <?php if(isset($_POST['program']) && $_POST['program'] == 'Cosmetology') { echo 'selected=selected';}?> value="Cosmetology">Cosmetology</option>
        <option <?php if(isset($_POST['program']) && $_POST['program'] == 'Barbering') { echo 'selected=selected';}?> value="Barbering">Barbering</option>
<option <?php if(isset($_POST['program']) && $_POST['program'] == 'Nail Technology') { echo 'selected=selected';}?>
        value="Nail Technology">Nail Technology</option>

        <option <?php if(isset($_POST['program']) && $_POST['program'] == 'Esthetics') { echo 'selected=selected';}?>
        value="Esthetics">Esthetics</option>
      </select>
    <?php
        if(isset($arrError['program'])) {
           echo $arrError['program'];
        }
      ?>
    </div><br>
<div class="formfield2">
<label  for="hear">How did you hear about us?:<span class="c-error">*</span></label><br />
      <select id="hear" name="hear" size="1" class="dropdown">

         <option value="">Select One</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Technical Center') { echo 'selected=selected';}?> value="Technical Center">Technical Center</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'SBHS Career Fair') { echo 'selected=selected';}?> value="SBHS Career Fair">SBHS Career Fair</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'CVU College Fair') { echo 'selected=selected';}?> value="CVU College Fair">CVU College Fair</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Facebook') { echo 'selected=selected';}?> value="Facebook">Facebook</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Instagram') { echo 'selected=selected';}?> value="Instagram">Instagram</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Pinterest') { echo 'selected=selected';}?> value="Pinterest">Pinterest</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Radio') { echo 'selected=selected';}?> value="Radio">Radio</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'TV') { echo 'selected=selected';}?> value="TV">TV</option>
        <option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Past/Current Student') { echo 'selected=selected';}?> value="Past/Current Student">Past/Current Student</option>
<option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Online Ad/Banner Ad') { echo 'selected=selected';}?> value="Online Ad/Banner Ad">Online Ad/Banner Ad</option>
<option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Event') { echo 'selected=selected';}?> value="Event">Event</option>
<option <?php if(isset($_POST['hear']) && $_POST['hear'] == 'Other') { echo 'selected=selected';}?> value="Other">Other</option>
      <!--option value="Other">Other</option-->
      </select>
    <?php
        if(isset($arrError['hear'])) {
           echo $arrError['hear'];
        }
      ?>
    </div><br>
<div class="formfield2">
<label class="contactform" for="hear">Other:</label><br />

    <input id="hearother" name="hearother" type="text" class="textfield1" value="<?php if(isset($_POST['hearother'])){echo $_POST['hearother'];}?>" placeholder="If not listed above." /><br>
   <?php
        if(isset($arrError['hearother'])) {
           echo $arrError['hearother'];
        }
      ?>
    </div><br>
<div class="formfield2">
<div id="g-recaptcha" data-sitekey="6LePxwcUAAAAALmudwVqcu1FKXkP1BDhiYeuf7_o"></div>
    <div class="error c-captcha"><?php if(isset($not_a_robot) && !empty($not_a_robot)) { echo $not_a_robot;}?></div>
</div><br>

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
