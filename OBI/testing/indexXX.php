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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

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
  $mail->From = "mtp@obi.sight2sitemedia.net"; //From mail address

  // I Have Used The Form Input Data As From Name
  $mail->FromName = $FullName ;

  // For SMTP
  $mail->IsSMTP();

  // SMTP Server. Change Accordingly
  $mail->Host = "gator4092.hostgator.com"; //Mail host. I used gmail
  $mail->Port = 465; //Port

  // Optional. Used Only When SMTP Requires Authentication
  $mail->SMTPAuth = true;

  // Change These Accordingly To Send Mail
  $mail->Username = 'smtp@obi.sight2sitemedia.net'; //From mail address
  $mail->Password = 'PrhB2Fh6?bbJ'; //Password

  //To Address And Name. Name Is Optional.
  $mail->addAddress("testing@obriensavedainstitute.org","O'Briens Aveda Institute");

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
  $mail->Subject = "Testing Application Form submission";
  $mail->Body = $message ;

  try {
    $mail->send();
      echo '<script>alert("Sent!")</script>';
  } catch (Exception $e) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  }
}
?>          
                

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Testing | </title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">


<link rel="stylesheet" href="../css/main.css"  type="text/css">
 <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/theme_1_animation_1.css">
    <link rel="stylesheet" href="../css/responsive.css">
<script type="text/javascript" src="../js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<!--<link rel="stylesheet" href="../css/main.css">-->
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>
<script src="/js/mobile_number_script.js"></script>

<link href="https://fonts.googleapis.com/css?family=Abel|Lato" rel="stylesheet">
   
<!---<script src='https://www.google.com/recaptcha/api.js'></script>---->   
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
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap');
      main{
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 20px;
      }
      main .input-field{
        width: 100%;
        height: 40px !important;
        margin-top: 5px !important;
        font-size: 18px !important;
        outline: none !important;
        padding: 0px 15px !important;
        border: 1px solid #ccc !important;
        border-radius: 0px;
        box-sizing: border-box;
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
    </style>
</head>
<style type="text/css">
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
<body>
<?php include '../includes/header.php';?>
<div style="height:200px;"></div>

	<div class="programssub">
		<div class="wrapper">
		<div class="Form_Container">
      <main class="container">
        <div class="col-8">
          <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>First Name</label><span style="color:red;"> *</span>
              <input type="text" class="form-control input-field" name="FullName" id="fName" maxlength="100" placeholder="Full Name" required>
            </div>
<br />
            <div class="form-group">
              <label>SSN</label>
              <input type="number" class="form-control input-field" name="SSN" id="SSN" maxlength="100" placeholder="SSN" required>
            </div>
<br />
            <div class="form-group">
              <label>Address</label><span style="color:red;"> *</span>
              <input type="text" class="form-control input-field" name="Address" id="Address" placeholder="Address" required>
            </div>
<br />
            <div class="form-group">
              <label>Phone Number</label><span style="color:red;"> *</span>
              <input type="tel" class="form-control input-field" name="PhoneNum" id="PhoneNum" placeholder="Phone Number" required>
            </div>
<br />
            <div class="form-group">
              <label>Enrolled Program</label>
              <select class="form-control input-field" name="Program" id="Program">
                <option value="" selected disabled>--- Select ---</option>
                <option value="Cosmetology">Cosmetology</option>
                <option value="Barber">Barber</option>
                <option value="Esthetics">Esthetics</option>
              </select>
            </div>
<br />
            <div class="form-group">
              <label>Testing Applied For</label>
              <select class="form-control input-field" name="Testing" id="Testing">
                <option value="" selected disabled>--- Select ---</option>
                <option value="Cosmetology">Cosmetology</option>
                <option value="Barber">Barber</option>
                <option value="Esthetics">Esthetics</option>
              </select>
            </div>
<br />
            <label for="">Upload Files</label><span style="color:red;"> *</span>
            <div class="form-group row">
              <div class="col">
                <label>2x2 Picture</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field" name="Photo" id="Photo" accept="image/*" required>
              </div><br />
              <div class="col">
                <label>Affidavit Of Hour</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field" name="Affidavit" id="Affidavit" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
              </div><br />
              <div class="col">
                <label>HS Diploma</label><span style="color:red;"> *</span>
                <input type="file" class="form-control input-field" name="Diploma" id="Diploma" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
              </div>
            </div><br />
            <div class="form-group">
                 <label>Fee Schedule</label>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="Fee" id="FirstCosmetologyAndPractical" value="1st time cosmetology theory and practical: $135" require>
                     <label class="form-check-label">1st time cosmetology theory and practical: <b> $135</b> </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="Fee" id="CosmetologyAndPracticalRetake" value="Cosmetology Theory and Practical Retake: $450" require>
                     <label class="form-check-label">Cosmetology Theory and Practical Retake: <b> $450</b></label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="Fee" id="PracticalOnlyRetake" value="Practical only retake: $225" require>
                     <label class="form-check-label">Practical only retake: <b> $225</b></label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="Fee" id="TheoryOnlyRetake" value="Theory only retake: $225" require>
                     <label class="form-check-label">Theory only retake: <b> $225</b></label>
                 </div><br />
                 <div class="form-group">
                     <button type="submit" class="btn btn-success button" name="submit">Submit</button>
                 </div>
             </div>
          </form>
        </div>
      </main>
    </div></div><br>
	</div>



<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>