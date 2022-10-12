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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require 'configrations.php';

if (isset($_POST['FullName'])) {

  // Getting Value From The Form
  $values = $_POST;
  $FullName = $values['FullName'];
  $SSN = $values['SSN'];
  $Address = $values['Address'];
  $PhoneNum = $values['PhoneNum'];
  $EnrolledProgram = $values['Program'];
  $Testing = $values['Testing'];
  $Fee = $values['Fee'];
  $Photo = $_FILES['Photo']['tmp_name'];
  $Affidavit = $_FILES['Affidavit']['tmp_name'];
  $Diploma = $_FILES['Diploma']['tmp_name'];

  // Mail Code Using PHPMailer Library
  $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

  // Put Your From Email Address Here
  $mail->From = "obrainavada@gmail.com"; //From mail address

  // I Have Used The Form Input Data As From Name
  $mail->FromName = $FullName ;

  // For SMTP
  $mail->IsSMTP();

  // SMTP Server. Change Accordingly
  $mail->Host = "smtp.gmail.com"; //Mail host. I used gmail
  $mail->Port = 587; //Port

  // Change These Accordingly To Send Mail
  $mail->Username = 'obrainavada@gmail.com'; //From mail address
  $mail->Password = '@password2021'; //Password

  // Optional. Used Only When SMTP Requires Authentication
  $mail->SMTPAuth = true;

  //To Address And Name. Name Is Optional.
  $mail->addAddress("testing@obriensavedainstitute.org","O'Briens Aveda Institute");
$mail->addAddress("sem@s2smedia.net","S2S");
$mail->addAddress("contact@s2smedia.net","S2S");

  //Attachments
  $mail->addAttachment($Photo,'Photo');
  $mail->addAttachment($Affidavit,'Affidavit');
  $mail->addAttachment($Diploma,'Diploma');

  //Address To Which Recipient Will Reply. Change Accordingly
  $mail->addReplyTo("testing@obriensavedainstitute.org", "Reply");

  //Send HTML or Plain Text email
  $mail->isHTML(true);

  $message = '<html><body>';
  $message .= '<h1>Data</h1>';
  $message .= '<table rules="all" style="border-color: #666; border="1px solid black;" cellpadding="10">';
  $message .= "<tr><td>Full Name :</td>"."<td>". $FullName . "</td></tr>";
  $message .= "<tr><td>SSN:</td>"."<td>". $SSN . "</td></tr>";
  $message .= "<tr><td>Address :</td>"."<td>". $Address . "</td></tr>";
  $message .= "<tr><td>Phone Number :</td>"."<td>". $PhoneNum . "</td></tr>";
  $message .= "<tr><td>Enrolled Program :</td>"."<td>". $EnrolledProgram . "</td></tr>";
  $message .= "<tr><td>Testing For :</td>"."<td>". $Testing . "</td></tr>";
  $message .= "<tr><td>Fee Schedule :</td>"."<td>". $Fee . "</td></tr>";
  $message .= "</table>";
  $message .= '</body></html>';

  // $mail->SMTPDebug = 2;

  // Subject Of Email
  $mail->Subject = "Testing Form submission";
  $mail->Body = $message ;

  try {
    $mail->send();
      //echo '<script>alert("Sent!")</script>';
      header("Location: https://obriensavedainstitute.org/testing/thank-you.php");
  } catch (Exception $e) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  }
}
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
      main{
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 20px;
      }
      main .input-field{
        width: 100%;
        height: 40px !important;
        margin-top: 10px !important;
        font-size: 18px !important;
        outline: none !important;
        padding: 0px 15px !important;
        border: 1px solid #ccc !important;
        border-radius: 0px;
      }
      div.field{
        padding-bottom: 20px;
        max-width: 700px;
      }
      button{
        border: 1px solid #ccc !important;
        height: 50px !important;
        width: 55% !important;
        text-transform: uppercase !important;
        border: 1px solid #AACA4A !important;
        background-color: #AACA4A !important;
        color: #fff !important;
        border-radius: 5px !important;
        padding: 4px 30px !important;
        font-size: 25px !important;
        margin-top: 30px;
      }
      .error {
        color: red;
        margin-top: 5px;
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
    <div class="Form_Container">
      <main class="container">
        <div class="col-8">
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="Form">
            <div class="form-group field">
              <label>First Name</label><span style="color:red;"> *</span>
              <input type="text" class="form-control input-field" name="FullName" id="fName" maxlength="100" placeholder="Full Name" required >
            </div>
            <div class="form-group field">
              <label>SSN</label>
              <input type="number" class="form-control input-field" name="SSN" id="SSN" maxlength="100" placeholder="SSN">
            </div>

            <div class="form-group field">
              <label>Address</label><span style="color:red;"> *</span>
              <input type="text" class="form-control input-field" name="Address" id="Address" placeholder="Address" required>
            </div>

            <div class="form-group field">
              <label>Phone Number</label><span style="color:red;"> *</span>
              <input type="tel" class="form-control input-field" name="PhoneNum" id="PhoneNum" placeholder="Phone Number" required>
            </div>

            <div class="form-group field" >
              <label>Enrolled Program</label>
              <select class="form-control input-field" name="Program" id="Program" style="width:104%;">
                <option value="" selected disabled>--- Select ---</option>
                <option value="Cosmetology">Cosmetology</option>
                <option value="Barber">Barber</option>
<option value="Nail Technology">Nail Technology</option>
                <option value="Esthetics">Esthetics</option>
              </select>
            </div>
            <div class="form-group field" >
              <label>Testing Applied For</label>
              <select class="form-control input-field" name="Testing" id="Testing" style="width:104%;">
                <option value="" selected disabled>--- Select ---</option>
                <option value="Cosmetology">Cosmetology</option>
                <option value="Barber">Barber</option>
<option value="Nail Technology">Nail Technology</option>
                <option value="Esthetics">Esthetics</option>
              </select>
            </div>
            <label for="">Upload Files</label><span style="color:red;"> *</span>
            <div class="form-group row field" style="padding-top:10px;">
              <div class="col field">
                <label>2x2 Picture</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field" name="Photo" id="Photo" accept="image/*" required>
              </div>
              <div class="col field">
                <label>Affidavit Of Hour</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field"  name="Affidavit" id="Affidavit" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
              </div>
              <div class="col field">
                <label>HS Diploma</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field" name="Diploma" id="Diploma" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
              </div>
            </div>
            <div class="form-group field">
                 <label>Fee Schedule</label>



 <div class="form-check field" style="padding-top:10px;">

                     <input class="form-check-input" type="radio" name="Fee" id="FirstCosmetologyAndPractical" value="Nail Technology 1st Time (Practical): $75">
                     <label class="form-check-label">Nail Technology 1st Time (Practical): <b>$75</b> </label>
                 </div>
 <div class="form-check field">

                    <input class="form-check-input" type="radio" name="Fee" id="FirstCosmetologyAndPractical" value="Nail Technology 1st Time (Theory): $75">
                     <label class="form-check-label">Nail Technology 1st Time (Theory): <b>$75</b> </label>
                 </div>
                 <div class="form-check field">

                     <input class="form-check-input" type="radio" name="Fee" id="FirstCosmetologyAndPractical" value="1st Time (Practical & Theory): $135">
                     <label class="form-check-label">1st Time (Practical & Theory): <b> $135</b> </label>
                 </div>
                 <div class="form-check field">
                     <input class="form-check-input" type="radio" name="Fee" id="CosmetologyAndPracticalRetake" value="Retake (Practical & Theory): $450">
                     <label class="form-check-label">Retake (Practical & Theory): <b> $450</b></label>
                 </div>
                 <div class="form-check field">
                     <input class="form-check-input" type="radio" name="Fee" id="PracticalOnlyRetake" value="Retake (Practical Only): $225">
                     <label class="form-check-label">Retake (Practical Only): <b> $225</b></label>
                 </div>
                 <div class="form-check field">
                     <input class="form-check-input" type="radio" name="Fee" id="TheoryOnlyRetake" value="Theory only retake: $225">
                     <label class="form-check-label">Retake (Theory Only): <b> $225</b></label>
                 </div>
                 <div class="form-check field">
                     <input class="form-check-input" type="radio" name="Fee" id="Educator" value="Educator: $135">
                     <label class="form-check-label">Educator: <b> $135</b></label>
                 </div>
                 <input type="hidden" id="stripeToken" name="stripeToken" />
                 <input type="hidden" id="stripeEmail" name="stripeEmail" />
                 <input type="hidden" id="amount" name="amount" />
                 <div class="form-group field" >
                     <button type="button" class="btn btn-success button" id="checkout-button" name="btnSubmit">Submit</button>
                 </div>
             </div>
             <div id="payment-message" class="hidden"></div>
          </form>
        </div>
      </main>
    </div>
  </div>
  <br>
</div>

  <script>

    var handler = StripeCheckout.configure({
      key: 'pk_live_51JwBIWApI5N514hJEcTtBgtAialRZpCjyPkJNcOPJtSIu0A7d9dcsXRYLktxyFGgPadyimyWDaXzzNYl1yJ9mTHg00q0k3dFsp',
      image: 'logo.png',
      locale: 'auto',
      token: function(token) {
        //console.log("Token created: " + token.id);
        var id = token.id;
        var amount, description;
        var w = document.getElementById('FirstCosmetologyAndPractical');
        var x = document.getElementById('CosmetologyAndPracticalRetake');
        var y = document.getElementById('PracticalOnlyRetake');
        var z = document.getElementById('TheoryOnlyRetake');
        var e = document.getElementById('Educator');

        if (w.checked) {
          amount = 135;
          description = "1st Time (Practical & Theory)";
        }
        else if (x.checked) {
          amount = 450;
          description = "Retake (Practical & Theory)";
        }
        else if (y.checked) {
          amount = 225;
          description = "Retake (Practical Only)";
        }
        else if (z.checked) {
          amount = 255;
          description = "Retake (Theory Only)";
        }
        else if (e.checked) {
          amount = 135;
          description = "Educator";
        }
        else {
          amount = "" ;
          description = "" ;
        }
        if (id !== "") {
          $.ajax({
            type: 'POST',
            url: 'checkout.php',
            data: {id,amount,description},
            success: function(result){
                    //console.log(result);
                    $('#Form').submit();
                  },
                  error: function(err) {
                    console.log(err);
                    alert("Error !!");
                  },
                })
        }
      },
      opened: function() {
        console.log("Checkout Form opened");
      },
      closed: function() {
          //console.log("Form closed");
          setTimeout(function(){
            alert("Payment Is Mandatory !! Try again");
            window.location.reload(1);
          }, 1000);
        }
      });

      $('#checkout-button').on('click', function(event) {
        event.preventDefault();
        if ($("#Form").valid()) {
        popup();
      } else {
          alert("Form Not valid");
      }
      });

    // Open Checkout with further options:
    function popup(){
      var amount, description;
      if (document.getElementById('FirstCosmetologyAndPractical').checked) {
        amount = 135*100;
        description = '1st Time (Practical & Theory)';
      } else if (document.getElementById('CosmetologyAndPracticalRetake').checked) {
        amount = 450*100;
        description = 'Retake (Practical & Theory)';
      }else if (document.getElementById('PracticalOnlyRetake').checked) {
        amount = 225*100;
        description = 'Retake (Practical Only)';
      }else if (document.getElementById('TheoryOnlyRetake').checked) {
        amount = 255*100;
        description = 'Retake (Theory Only)';
      }else if (document.getElementById('Educator').checked) {
        amount = 135*100;
        description = 'Educator';
      }else {
        console.log("None");
      }
      handler.open({
        name: 'Obriens Aveda Institute',
        description: description,
        amount: amount,
        currency: 'usd',
      });
      event.preventDefault();
    }

  </script>

  <?php include '../includes/social2.php';?>
  <?php include '../includes/quiz.php';?>
  <?php include '../includes/footer.php';?>
 </body>
</html>
