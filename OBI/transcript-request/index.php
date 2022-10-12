<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'transcript_request'
  list($transcript_requestRecords, $transcript_requestMetaData) = getRecords(array(
    'tableName'   => 'transcript_request',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $transcript_requestRecord = @$transcript_requestRecords[0]; // get first record


 // load record from 'transcript_request'
  list($transcript_pageRecords, $transcript_pageMetaData) = getRecords(array(
    'tableName'   => 'transcript_page',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $transcript_pageRecord = @$transcript_pageRecords[0]; // get first record

 // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'contact_us_pages'
  list($transcript_request_pagesRecords, $transcript_request_pagesMetaData) = getRecords(array(
    'tableName'   => 'contact_us_pages',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<?php
  


    $not_a_robot = '';
    $Success = '';
    $arrError = array();  

	if (isset($_POST['submit'])) {
    
		if( !isset($_POST['select_school']) || ( isset($_POST['select_school'])  && empty($_POST['select_school']))) {
			$arrError['select_school'] = '<div class ="c-error">Please Select School</div>';
		}
		
		if( !isset($_POST['month_year_started']) || ( isset($_POST['month_year_started'])  && empty($_POST['month_year_started']))) {
			$arrError['month_year_started'] = '<div class ="c-error">Please Enter Month/Year Started</div>';
		}
		
		if( !isset($_POST['month_year_stop']) || ( isset($_POST['month_year_stop'])  && empty($_POST['month_year_stop']))) {
			$arrError['month_year_stop'] = '<div class ="c-error">Please Enter Month/Year Stop</div>';
		}
		
		if( !isset($_POST['graduate']) || ( isset($_POST['graduate'])  && empty($_POST['graduate']))) {
			$arrError['graduate'] = '<div class ="c-error">Please Select Are You Graduate</div>';
		}
		
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
		
		if( !isset($_POST['streetname']) || ( isset($_POST['streetname'])  && empty($_POST['streetname']))) {
			$arrError['streetname'] = '<div class ="c-error">Please Enter Street Name</div>';
		}
		
		if( !isset($_POST['city']) || ( isset($_POST['city'])  && empty($_POST['city']))) {
			$arrError['city'] = '<div class ="c-error">Please Enter City</div>';
		}
		
		if( !isset($_POST['state']) || ( isset($_POST['state'])  && empty($_POST['state']))) {
			$arrError['state'] = '<div class ="c-error">Please Enter State</div>';
		}
		
		if( !isset($_POST['zip']) || ( isset($_POST['zip'])  && empty($_POST['zip']))) {
			$arrError['zip'] = '<div class ="c-error">Please Enter Zip</div>';
		}
		if(!isset($_POST['certify'])){
			$arrError['certify'] = '<div class ="c-error">Please Check Transcript Payments</div>';
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

			$Certify = '1';
			
			$query = " INSERT INTO `cmsb_transcript_request` SET ";
			$query.= " `createdDate`  = '".date('Y-m-d h:i:s')."', ";
			$query.= " `createdByUserNum`  = '0', ";
			$query.= " `updatedDate`  = '".date('Y-m-d h:i:s')."', ";
			$query.= " `updatedByUserNum`  = '0', ";			
			$query.= " `dragSortOrder`  = '0', ";
			$query.= " `select_school`  = '".mysql_real_escape_string($_POST['select_school'])."', ";
			$query.= " `month_year_started`  = '".mysql_real_escape_string($_POST['month_year_started'])."', ";
			$query.= " `month_year_stop`  = '".mysql_real_escape_string($_POST['month_year_stop'])."', ";
			$query.= " `graduate`  = '".mysql_real_escape_string($_POST['graduate'])."', ";			
			$query.= " `firstname`  = '".mysql_real_escape_string($_POST['firstname'])."', ";
			$query.= " `lastname`  = '".mysql_real_escape_string($_POST['lastname'])."', ";
			$query.= " `phone`  = '".mysql_real_escape_string($_POST['phone'])."', ";
			$query.= " `email`  = '".mysql_real_escape_string($_POST['email'])."', ";
			$query.= " `streetname`  = '".mysql_real_escape_string($_POST['streetname'])."', ";
			$query.= " `city`  = '".mysql_real_escape_string($_POST['city'])."', ";
			$query.= " `state`  = '".mysql_real_escape_string($_POST['state'])."', ";
			$query.= " `zip`  = '".mysql_real_escape_string($_POST['zip'])."', ";
			$query.= " `certify`  = '".mysql_real_escape_string($Certify)."' ";
			$Run = mysql_query($query);
		
			
           $tableStyle = 'border: 1px solid #ddd;text-align: left; border-collapse: collapse; width: 100%;';        
			$tableCellStyle = 'border: 1px solid #ddd;text-align: left; padding: 12px;';

			
			$To = 'admissions@obriensavedainstitute.org';
			$subject = 'Transcript Request';
			
			$message = "	
						<h3>Transcript Request</h3>
						<table style='".$tableStyle."'>						
							<tr>
								<th style='".$tableCellStyle."'>Select School You Attended</th>
								<td style='".$tableCellStyle."'>".$_POST['select_school']."</td>
							</tr>
							
							<tr>
								<th style='".$tableCellStyle."'>Month/Year Started</th>
								<td style='".$tableCellStyle."'>".$_POST['month_year_started']."</td>
							</tr>
								
							<tr>
								<th style='".$tableCellStyle."'>Month/Year Stopped Attending</th>
								<td style='".$tableCellStyle."'>".$_POST['month_year_stop']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Did You Graduate?</th>
								<td style='".$tableCellStyle."'>".$_POST['graduate']."</td>
							</tr>
								
							<tr>
								<th style='".$tableCellStyle."'>First Name</th>
								<td style='".$tableCellStyle."'>".$_POST['firstname']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Last Name</th>
								<td style='".$tableCellStyle."'>".$_POST['lastname']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Phone Number</th>
								<td style='".$tableCellStyle."'>".$_POST['phone']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Email :</th>
								<td style='".$tableCellStyle."'>".$_POST['email']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Street Name :</th>
								<td style='".$tableCellStyle."'>".$_POST['streetname']."</td>
							</tr>	
								
							<tr>
								<th style='".$tableCellStyle."'>City :</th>
								<td style='".$tableCellStyle."'>".$_POST['city']."</td>
							</tr>	
								
							<tr>
								<th style='".$tableCellStyle."'>State :</th>
								<td style='".$tableCellStyle."'>".$_POST['state']."</td>
							</tr>
							
							<tr>
								<th style='".$tableCellStyle."'>Zip :</th>
								<td style='".$tableCellStyle."'>".$_POST['zip']."</td>
							</tr>
	
						</table>
					
					<br>
					<h4>Thanks......</h4>
					<h4>AVEDA INSTITUTE</h4>
			";
			
			
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";			
			
			mail($To,$subject,$message,$headers);
			
			$Success = 'ok';
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($transcript_requestRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($transcript_requestRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($transcript_requestRecord['meta_keywords']) ?>" />
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
<div class="royalSlider rsDefault">
    
<?php foreach ($transcript_pageRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext2" style="color:<?php echo htmlencode($upload['info2']) ?>">TRANSCRIPT REQUEST
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
</script>
	<div class="greenbarsub">
		<div class="wrapper">
		<?php if(isset($transcript_pageRecord['sub_text']) && !empty($transcript_pageRecord['sub_text'])) { echo htmlencode($transcript_pageRecord['sub_text']); } ?></div><br>
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
					<?php foreach ($transcript_request_pagesRecords as $record): ?>
					<a href="<?php echo $record['_link'] ?>"> <div class="toolboxitem"><?php echo htmlencode($record['title']) ?></div></a>
					<?php endforeach ?>
					<a href="../transcript-request"> <div class="toolboxitem">Transcript Request</div></a>

				</div><?php echo $transcript_pageRecord['content']; ?>
				
				<?php if(isset($Success) && $Success == 'ok') { ?>
					<h2>Thank You !</h2>
					<h5>Successfully Submit Transcript Request ..</h5>
				<?php } else { ?> 
				<form id="requestinfoform" class="form" action="" name="form" method="post">
					
					<label class="contactform" for="select_school">Select School You Attended<span class="c-error">*</span></label><br />
					<select id="select_school" name="select_school" size="1" class="dropdown contactform">
						<option value="">Select School You Attended</option>
						<option <?php if(isset($_POST['select_school']) && $_POST['select_school'] == 'The Salon Professional Academy') { echo 'selected=selected';}?> value="The Salon Professional Academy">The Salon Professional Academy</option>
						<option <?php if(isset($_POST['select_school']) && $_POST['select_school'] == "O'Brien Aveda Institute") { echo 'selected=selected';}?> value="O'Briens Aveda Institute">O'Briens Aveda Institute</option>
					</select><br />
					<?php	if(isset($arrError['select_school'])) { 	echo $arrError['select_school']; }	?>
					<br />
					
					<div class="formfield">
						<label class="contactform" for="month_year_started">Month/Year Started:<span class="c-error">*</span></label><br />
						<input id="month_year_started" name="month_year_started" type="text" class="textfield1" value="<?php if(isset($_POST['month_year_started'])){echo $_POST['month_year_started'];}?>" placeholder="Month/Year Started" /> 
						<br>
						<?php 
						if(isset($arrError['month_year_started'])) {
						echo $arrError['month_year_started'];
						}
						?> 
					</div>
					<div class="formfield">
						<label class="contactform" for="month_year_stop">Month/Year Stopped Attending:<span class="c-error">*</span></label><br />
						<input id="month_year_stop" name="month_year_stop" type="text" class="textfield1" value="<?php if(isset($_POST['month_year_stop'])){echo $_POST['month_year_stop'];}?>" placeholder="Month/Year Stopped Attending" /> 
						<br>
						<?php 
						if(isset($arrError['month_year_stop'])) {
						echo $arrError['month_year_stop'];
						}
						?> 
					</div><br><br><br>
					<div class="formfield">
						<label class="contactform" for="graduate">Did You Graduate?:<span class="c-error">*</span></label><br />

						<select id="graduate" name="graduate" size="1" class="dropdown">
								<option value="">Select One</option>
								<option <?php if(isset($_POST['select_school']) && $_POST['select_school'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
								<option <?php if(isset($_POST['select_school']) && $_POST['select_school'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
							</select><br />
							<?php	if(isset($arrError['graduate'])) { 	echo $arrError['graduate']; }	?>
					</div>
					
					<div class="formfield">
						<h2>Student Details</h2>
					</div>
					<div style="clear: both;"></div> 


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
					<div class="formfield">
						<h2>Where to send Transcipt to?</h2>
					</div>
					<div style="clear: both;"></div> 

					<div class="formfield" style="width:90%">
						<label class="contactform" for="streetname">Street Name<span class="c-error">*</span></label><br />
						<input id="streetname" name="streetname" type="text" class="textfield1" value="<?php if(isset($_POST['streetname'])){echo $_POST['streetname'];}?>" placeholder="Street Name" /> 
						<br>
						<?php 
						if(isset($arrError['streetname'])) {
						echo $arrError['streetname'];
						}
						?> 
					</div>

					<div style="clear: both;"></div> 

					<div class="formfield" style="width:45%">
						<label class="contactform" for="city">City<span class="c-error">*</span></label><br />
						<input id="city" name="city" type="text" class="textfield1"  value="<?php if(isset($_POST['city'])){echo $_POST['city'];}?>" placeholder="City" /><br>

						<?php 
						if(isset($arrError['city'])) {
						echo $arrError['city'];
						}
						?>   
					</div>
					
					<div class="formfield" style="width:45%">
						<label class="contactform" for="state">State<span class="c-error">*</span></label><br />
						<input id="state" name="state" type="text" class="textfield1"  value="<?php if(isset($_POST['state'])){echo $_POST['state'];}?>" placeholder="State" /><br>

						<?php 
						if(isset($arrError['state'])) {
						echo $arrError['state'];
						}
						?>   
					</div>

					<div class="formfield" style="width:10%">
						<label class="contactform" for="zip">Zip<span class="c-error">*</span></label><br />
						<input id="zip" name="zip" type="text" class="textfield1"  value="<?php if(isset($_POST['zip'])){echo $_POST['zip'];}?>" placeholder="Zip" /><br>

						<?php 
						if(isset($arrError['zip'])) {
						echo $arrError['zip'];
						}
						?>   
					</div>
									
					<div style="clear: both;"></div> 



					<div class="formfield" style="width:90%">
	
						<input type="checkbox" name="certify">By signing this form, I understand O'Briens Aveda Institute is not liable for student files older than 5 years. I also understand there is a $25 transcript fee that needs to be paid prior to getting the needed documents. Transcript payments can be made by over the phone by calling 802-876-7044 x3.

						<br>
						<span class="c_error"><?php if(isset($arrError['certify']) && !empty($arrError['certify'])) { echo $arrError['certify'];}?></span>
					</div><br />

					<div style="clear: both;"></div>
					
					<div class="formfield">
						<div id="g-recaptcha" data-sitekey="6LePxwcUAAAAALmudwVqcu1FKXkP1BDhiYeuf7_o"></div>
						<div class="error c-captcha"><?php if(isset($not_a_robot) && !empty($not_a_robot)) { echo $not_a_robot;}?></div>
					</div>
					<br>
					<div class="formfield2">
						<input type="submit" value="Submit" id="submit" name="submit" class="formbutton" /> <br /> <em>*Required field</em>
					</div>
				</form>
				
				<?php } ?>
				<div style="clear: both;"></div> 
			</div>
		</div>
		<?php
	}
?> 
</div>
</div>







<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>