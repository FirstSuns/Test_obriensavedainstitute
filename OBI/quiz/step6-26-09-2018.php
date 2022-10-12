<?php session_start();
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'programs_overview'
  list($programs_overviewRecords, $programs_overviewMetaData) = getRecords(array(
    'tableName'   => 'programs_overview',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $programs_overviewRecord = @$programs_overviewRecords[0]; 
// load record from 'programs_overview'
  list($blogRecords, $blogMetaData) = getRecords(array(
    'tableName'   => 'blog',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  $blogRecord = @$blogRecords[0]; 
  
  
	
	$arrError = array();
	if(isset($_POST['btn_step5'])) {
		
		if(isset($_SESSION['sess_err'])) {
			unset($_SESSION['sess_err']);
		}
		
		if(!isset($_POST['firstname']) || (isset($_POST['firstname']) && empty($_POST['firstname']))) {
			$arrError['firstname'] = 'Please enter first name.';
		}
		
		if(!isset($_POST['lastname']) || (isset($_POST['lastname']) && empty($_POST['lastname']))) {
			$arrError['lastname'] = 'Please enter last name.';
		}
		
		if(!isset($_POST['email']) || (isset($_POST['email']) && empty($_POST['email']))) {
			$arrError['email'] = 'Please enter email address.';
		} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$arrError['email'] = 'Please enter valid email address.';
		}
		
		if(!isset($_POST['phone']) || (isset($_POST['phone']) && empty($_POST['phone']))) {
			$arrError['phone'] = 'Please enter phone number.';
		}
		
		
		$_SESSION['sess_step5'] = $_POST;
		if(isset($arrError) && is_array($arrError) && count($arrError)==0)	{
			echo '<meta http-equiv="refresh" content="0;url=step6.php">';
			exit();
		} else {
			$_SESSION['sess_err'] = $arrError;
			echo '<meta http-equiv="refresh" content="0;url=step5.php">';
			exit();
		}
		
		
	}
	
	if(isset($_SESSION['sess_step5'])) {
		
		$step3_step4_total = $_SESSION['sess_step3']['spend_time_val'] + $_SESSION['sess_step4']['celebrity_style_val'];
		
		$devided_val = $step3_step4_total / 2;
		
		$arrChecking['Cosmetology'] = array(
			'123'			=> 'Fashion Photo Stylist',
			'456'			=> 'Master Hair Colorist',
			'789'			=> 'Salon Owner'
		);
		
		$arrChecking['Barbering'] = array(
			'123'			=> 'Neighborhood Barber',
			'456'			=> 'Barbering Educator',
			'789'			=> 'Barber Shop Owner'
		);
		
		$arrChecking['Esthetics'] = array(
			'123'			=> 'Skin Care Specialist',
			'456'			=> 'Master Esthetician',
			'789'			=> 'Resort Spa Manager'
		);
		
		$select_type = $_SESSION['sess_step2']['preferred_work_enviroment_type'];
		
		$arrFinal = array();
		$arrFinal = $arrChecking[$select_type];
		
		$theShow_text = '';
		foreach($arrFinal as $index => $val)	{
			if(substr($index,0,1)==$devided_val || substr($index,1,1)==$devided_val || substr($index,2,1)==$devided_val) {
				$theShow_text = $arrFinal[$index];
			}
		}
		
		
		$arrFinalText['Cosmetology'] = array(
			'Fashion Photo Stylist'		=> "YOU ARE A PERFECT FIT TO BE A FASHION INDUSTRY STYLIST.<br /> SPEND YOUR DAYS GETTING FASHION MODELS READY FOR THE RUNWAY.<br /><br />",
			'Master Hair Colorist' 		=> "YOU ARE A PERFECT FIT TO BE A PROFESSIONAL HAIR COLORIST.<br /> CREATE THE PERFECT HAIR COLOR SHADES THAT YOUR CLIENTS LOVE.<br /><br />",
			'Salon Owner'				=> "YOU ARE A PERFECT CANDIDATE TO OWN A SALON.<br /> BUILD YOUR DREAM SALON AND HIRE STYLISTS TO WORK FOR YOU.<br /><br />"
		);
		
		$arrFinalText['Barbering'] = array(
			'Neighborhood Barber'	=> "YOU WOULD MAKE A GREAT NEIGHBORHOOD BARBER.<br /> GET TO KNOW LOCALS AND BUILD A NAME FOR YOURSELF IN THE COMMUNITY.<br /><br />",
			'Barbering Educator'	=> "YOU ARE A PERFECT FIT TO TRAIN THE NEXT GENERATION OF BARBERS.<br /> SHARE YOUR PASSION FOR BARBERING WITH STUDENTS OF ALL AGES.<br /><br />",
			'Barber Shop Owner'		=> "YOU WOULD MAKE A GREAT BARBERSHOP OWNER.<br /> WHETHER YOU WANT TRENDY OR TRADITIONAL, YOU HAVE WHAT IT TAKES.<br /><br />"
		);
		
		$arrFinalText['Esthetics'] = array(
			'Skin Care Specialist'	=> "YOU WOULD MAKE A SKIN CARE SPECIALIST.<br /> YOU PERFECTED YOUR CRAFT, NOW PUT IT TO USE WITH CLIENTS LOOKING FOR PERFECT SKIN.<br /><br />",
			'Master Esthetician'	=> "YOU WOULD MAKE A GREAT ESTHETICIAN.<br /> USE YOUR SKILLS IN A SPA OR EVEN A DERMATOLOGISTS OFFICE.<br /><br />",
			'Resort Spa Manager'	=> "YOU WOULD MAKE A SPA MANAGER.<br /> FIND YOUR SELF RUNNING A LUXURIOUS  SPA IN A RESORT/HOTEL.<br /><br />"
		);
		
		$string_to_show = '';
		$string_to_show = $arrFinalText[$select_type][$theShow_text];
		
		/*
		MAIL
		*/
		$content = "
		<table style='border: 1px solid #ddd;text-align: left; border-collapse: collapse; width: 75%;'>
			<tr>
				<th colspan='2' style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Quiz Details</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>First Name</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step5']['firstname']."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Last Name</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step5']['lastname']."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Email Address</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step5']['email']."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Phone Number</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step5']['phone']."</th>
			</tr>
			<tr>
				<th colspan='2' style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Step Details</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Step 1</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$select_type."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Step 2</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step3']['spend_time_val']."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Step 2</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$_SESSION['sess_step4']['celebrity_style_val']."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Style</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$theShow_text."</th>
			</tr>
			<tr>
				<th style='border: 1px solid #ddd;text-align: center; padding: 7px;font-size: 12px;'>Message</th>
				<th style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>".$string_to_show."</th>
			</tr>
			<tr>
				<th colspan='2' style='border: 1px solid #ddd;text-align: left; padding: 7px;font-size: 12px;'>
				Thank you,<br>
				O'Briens Aveda Institute.
				</th>
			</tr>
		</table>";
		
		$to = 'dev@s2smedia.net';
		$sub = 'New Career Quiz Results';

		$headers= "From:O'Brien Aveda Institute<info@obi.sight2sitemedia.net>\r\n";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=iso-8859-1\r\n";
		$headers.= "X-Priority: 1\r\n";	
		mail($to,$sub,$content,$headers);
		
		$date = date("Y-m-d H:i:s");
		
		$query = " INSERT INTO `cmsb_career_quiz` SET ";
		$query.=" `createdDate` = '".$date."', ";
		$query.=" `createdByUserNum` = 0, ";
		$query.=" `updatedDate` = '".$date."', ";
		$query.=" `updatedByUserNum` = 0, ";
		$query.=" `dragSortOrder` = 0, ";
		$query.=" `first_name` = '".$_SESSION['sess_step5']['firstname']."', ";
		$query.=" `last_name` = '".$_SESSION['sess_step5']['lastname']."', ";
		$query.=" `phone_number` = '".$_SESSION['sess_step5']['phone']."', ";
		$query.=" `email_address` = '".$_SESSION['sess_step5']['email']."' ";
		
		mysql_query($query) or die(mysql_error()." :$query:");
		
		
	} else {
		echo '<meta http-equiv="refresh" content="0;url=step2.php">';
		exit();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="<?=$theShow_text?>">
<meta property="og:image" content="http://obi.sight2sitemedia.net/images/celebbg.jpg">
<meta property="og:site_name" content="O'Briens Aveda Institute">
<meta property="og:description" content="<?=$string_to_show?>">
<title>Career Quiz | O'Briens Aveda Institute | So. Burlington, VT</title>
<meta name="description" content="O'Briens Aveda Institute prepares its students to graduate from its institution to become successful professionals in the fields of cosmetology, barbering,and spa therapy.The O'Briens have been in the cosmetology business for over 60 years. Starting in the early 1950's, they were the first to open first floor locations next to high-end retail stores, developing new concepts such as `no appointment necessary' walk-in services. At that time the cosmetology business was in a state of expansion and there was need for young skilled stylists." />
<meta name="keywords" content="aveda, cosmetology, beauty salon vermont, aveda, avada, esthiology, cosmetology classes vermont, esthiology classes Burlington, aveda Burlington, cosmetology Burlington, aveda institute, Vermont Beauty School, Burlington Beauty School, Aveda Beauty School" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>

</head>

<body>
<?php include '../includes/header.php';?>
<div style="clear: both;"></div>

<div class="quizsub" style="background-image: url(../images/celebbg.jpg)">
<div class="wrapper">
<h5><?=$theShow_text?></h5>
<?=(isset($_SESSION['sess_step5']['firstname']) ? $_SESSION['sess_step5']['firstname'] : '')?> <?=(isset($_SESSION['sess_step5']['lastname']) ? $_SESSION['sess_step5']['lastname'] : '')?>,<br />
<?=$string_to_show?>


	<?php
	/* destroy session */
	
	unset($_SESSION['sess_step2']);
	unset($_SESSION['sess_step3']);
	unset($_SESSION['sess_step4']);
	unset($_SESSION['sess_step5']);
	
	?>

<div style="clear: both; height:40px;"></div>
<a class="share-btn" href="https://www.facebook.com/sharer/sharer.php?app_id=[your_app_id]&sdk=joey&u=http://obi.sight2sitemedia.net/quiz/step6.php&display=popup&ref=plugin&src=share_button" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')"><div class="quizbutton2">SHARE ON FACEBOOK</div></a><div style="clear: both;"></div></div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>