<?php 

  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home4/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'apply_now'
  list($apply_nowRecords, $apply_nowMetaData) = getRecords(array(
    'tableName'   => 'apply_now',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $apply_nowRecord = @$apply_nowRecords[0]; // get first record

	// load viewer library
	  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
	  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
	  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
	  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }
	  
	$ArrError = array();
	$Success = '';
	
	
	$count_age_on_dob = 0;
	if(isset($_POST['submit'])){
		if(isset($_POST['program']) && $_POST['program'] == '')	{
			$ArrError['program'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['citizen_usa']) && $_POST['citizen_usa'] == '')	{
			$ArrError['citizen_usa'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['res_vermont']) && $_POST['res_vermont'] == '')	{
			$ArrError['res_vermont'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['race']) && $_POST['race'] == '')	{
			$ArrError['race'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['relation_status']) && $_POST['relation_status'] == '')	{
			$ArrError['relation_status'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['have_children']) && $_POST['have_children'] == '')	{
			$ArrError['have_children'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['live_with_parents']) && $_POST['live_with_parents'] == '')	{
			$ArrError['live_with_parents'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['high_level_educ']) && $_POST['high_level_educ'] == '')	{
			$ArrError['high_level_educ'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['IEP']) && $_POST['IEP'] == '')	{
			$ArrError['IEP'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['attend_cosme_School']) && $_POST['attend_cosme_School'] == '')	{
			$ArrError['attend_cosme_School'] = 'Please Select Proper Option';
		} else if(!empty($_POST['attend_cosme_School']) && $_POST['attend_cosme_School'] =='Yes') {
			if(isset($_POST['cosme_school_yes']) && empty($_POST['cosme_school_yes'])) {
				$ArrError['cosme_school_yes'] = 'Please enter place of attended Cosmetology School.';
			}
			if(isset($_POST['clock_hours']) && empty($_POST['clock_hours'])) {
				$ArrError['clock_hours'] = 'Please Enter Hours';
			}
		}
		
		if(isset($_POST['driver_license']) && $_POST['driver_license'] == '')	{
			$ArrError['driver_license'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['drive_to_school']) && $_POST['drive_to_school'] == '')	{
			$ArrError['drive_to_school'] = 'Please Select Proper Option';
		}
		
		if(isset($_POST['hear']) && $_POST['hear'] == '')	{
			$ArrError['hear'] = 'Please Select Proper Option';
		}		
		
		
		if(isset($_POST['attend_cosme_School']) && $_POST['attend_cosme_School'] == 'Yes' && isset($_POST['cosme_school_yes']) && empty($_POST['cosme_school_yes']))	{
			$ArrError['cosme_school_yes'] = 'Please Enter Cosmetology School';
		}
		
		if(isset($_POST['driver_license']) && $_POST['driver_license'] == 'Yes' && isset($_POST['license_number']) && empty($_POST['license_number']))	{
			$ArrError['license_number'] = 'Please Enter License Number';
		}
		
		if(isset($_POST['health_prog']) && $_POST['health_prog'] == 'Yes' && isset($_POST['explain']) && empty($_POST['explain']))	{
			$ArrError['explain'] = 'Please Explain Health Problem';
		}
		
		if(isset($_POST['convected_fel']) && $_POST['convected_fel'] == 'Yes' && isset($_POST['charge']) && empty($_POST['charge']))	{
			$ArrError['charge'] = 'Please Enter Your Charge';
		}
		
				
		if(isset($_POST['firstname']) && empty($_POST['firstname'])) {
			$ArrError['firstname'] = 'Please Enter First Name';
		}
		
		if(isset($_POST['lastname']) && empty($_POST['lastname'])) {
			$ArrError['lastname'] = 'Please Enter LastName';
		}
		
		if(isset($_POST['phone']) && empty($_POST['phone'])) {
			$ArrError['phone'] = 'Please Enter Phone Number';
		}
		
		if(isset($_POST['email']) && empty($_POST['email'])) {
			$ArrError['email'] = 'Please Enter Email Address';
		} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$ArrError['email'] = "Email must be valid... This is wrong : ".$_POST['email'];
		}
		
		if(isset($_POST['address']) && empty($_POST['address'])) {
			$ArrError['address'] = 'Please Enter Address';
		}
		
		if(isset($_POST['city']) && empty($_POST['city'])) {
			$ArrError['city'] = 'Please Enter City';
		}
		
		if(isset($_POST['state']) && empty($_POST['state'])) {
			$ArrError['state'] = 'Please Enter State';
		}
		
		if(isset($_POST['zip']) && empty($_POST['zip'])) {
			$ArrError['zip'] = 'Please Enter ZIP';
		}
		
		if(isset($_POST['dob']) && empty($_POST['dob'])) {
			$ArrError['dob'] = 'Please Enter Data Of Birth';
		} else {
			/* object oriented */
			$dob = date("Y-m-d",strtotime($_POST['dob']));
			$from = new DateTime($dob);
			$to   = new DateTime('today');
			$count_age_on_dob = $from->diff($to)->y;
		}
		
		if(isset($_POST['soc_secu_number']) && empty($_POST['soc_secu_number'])) {
			$ArrError['soc_secu_number'] = 'Please Enter Security Number';
		}
		
		
		if(isset($_POST['high_school_attend']) && empty($_POST['high_school_attend'])) {
			$ArrError['high_school_attend'] = 'Please Enter High School Attended';
		}
		
		if(isset($_POST['guardian_year']) && empty($_POST['guardian_year'])) {
			$ArrError['guardian_year'] = 'Please Enter Guardian Year';
		}
		
		
		
		if(isset($_POST['first_name_your_tag']) && empty($_POST['first_name_your_tag'])) {
			$ArrError['first_name_your_tag'] = 'Please Enter Tag Name';
		}
		
		/*if(isset($_POST['license_number']) && empty($_POST['license_number'])) {
			$ArrError['license_number'] = 'Please Enter License Number';
		}*/
		
		if(isset($_POST['drive_to_school']) && !empty($_POST['drive_to_school']) && $_POST['drive_to_school'] == 'Yes') {
			if(isset($_POST['vehicle_make']) && empty($_POST['vehicle_make'])) {
				$ArrError['vehicle_make'] = 'Please Enter vehicle Make';
			}
			
			if(isset($_POST['vehicle_color']) && empty($_POST['vehicle_color'])) {
				$ArrError['vehicle_color'] = 'Please Enter Vehicle Color';
			}

	if(isset($_POST['license_plate']) && empty($_POST['license_plate'])) {
			$ArrError['license_plate'] = 'Please Enter License Plate Number';
		}

		}
		
		
			
		if(isset($_POST['medi_school']) && !empty($_POST['medi_school']) && $_POST['medi_school'] =='Yes') {
			if(isset($_POST['list_medi_take']) && empty($_POST['list_medi_take'])) {
				$ArrError['list_medi_take'] = 'Please Enter Medication You Take';
			}
		}
		
		
		/*if(isset($_POST['charge']) && empty($_POST['charge'])) {
			$ArrError['charge'] = 'Please Enter Your Charge';
		}*/
		
		if(isset($_POST['pri_firstname']) && empty($_POST['pri_firstname'])) {
			$ArrError['pri_firstname'] = 'Please Enter Primary First Name';
		}
		
		if(isset($_POST['pri_lastname']) && empty($_POST['pri_lastname'])) {
			$ArrError['pri_lastname'] = 'Please Enter Primary Last Name';
		}
		
		if(isset($_POST['pri_phone_number']) && empty($_POST['pri_phone_number'])) {
			$ArrError['pri_phone_number'] = 'Please Enter Primary Phone Number';
		}
		
		if(isset($_POST['contactName']) && empty($_POST['contactName'])) {
			$ArrError['contactName'] = 'Please Enter Contact Name';
		}
		
		/* If DOB is under 18 than and than ask for guardianName */
		if(isset($count_age_on_dob) && $count_age_on_dob < 18) {
			if(isset($_POST['guardianName']) && empty($_POST['guardianName'])) {
				$ArrError['guardianName'] = 'Please Enter Guardian Name';
			}
		}
		
		/*
		if(isset($_POST['guardianName']) && empty($_POST['guardianName'])) {
			$ArrError['guardianName'] = 'Please Enter Guardian Name';
		}
		
		if(isset($_POST['guardianName']) && empty($_POST['guardianName'])) {
			$ArrError['guardianName'] = 'Please Enter Guardian Name';
		}*/
		if(!isset($_POST['certify']) || $_POST['certify'] == '') {
			$ArrError['certify'] = 'Please Check Certify';
		}
		 //your site secret key
        $secret = '6LfvkIIUAAAAABt8NACRemyblhLBYMgzH5_ms5xX';
        //get verify response data

        //$verifyResponse = get_content('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success) {
            $not_a_robot = '<div class ="c_error">Please select I am not a robot and prove that you are human.</div>'; 
        }
		
		$Dob = '';
        if(isset($_POST['dob']) && !empty($_POST['dob'])){
			$Dob = date('Y-m-d H:i:s',strtotime($_POST['dob']));	
		}
		
		if(isset($ArrError) && is_array($ArrError) && count($ArrError) == 0){
			
			$Certify = 'Yes';
			
			$query = " INSERT INTO `cmsb_applications` SET ";
			$query.= " `createdDate`  = '".date('Y-m-d h:i:s')."', ";
			$query.= " `createdByUserNum`  = '0', ";
			$query.= " `updatedDate`  = '".date('Y-m-d h:i:s')."', ";
			$query.= " `updatedByUserNum`  = '0', ";
			$query.= " `dragSortOrder`  = '0', ";
			$query.= " `program`  = '".mysql_real_escape_string($_POST['program'])."', ";
			$query.= " `firstname`  = '".mysql_real_escape_string($_POST['firstname'])."', ";
			$query.= " `lastname`  = '".mysql_real_escape_string($_POST['lastname'])."', ";
			$query.= " `phone`  = '".mysql_real_escape_string($_POST['phone'])."', ";
			$query.= " `email`  = '".mysql_real_escape_string($_POST['email'])."', ";
			$query.= " `address`  = '".mysql_real_escape_string($_POST['address'])."', ";
			$query.= " `city`  = '".mysql_real_escape_string($_POST['city'])."', ";
			$query.= " `state`  = '".mysql_real_escape_string($_POST['state'])."', ";
			$query.= " `zip`  = '".mysql_real_escape_string($_POST['zip'])."', ";
			$query.= " `gender`  = '".mysql_real_escape_string($_POST['gender'])."', ";
			$query.= " `dob`  = '".mysql_real_escape_string($Dob)."', ";
			$query.= " `soc_secu_number`  = '".mysql_real_escape_string($_POST['soc_secu_number'])."', ";
			$query.= " `citizen_usa`  = '".mysql_real_escape_string($_POST['citizen_usa'])."', ";
			$query.= " `res_vermont`  = '".mysql_real_escape_string($_POST['res_vermont'])."', ";
			$query.= " `race`  = '".mysql_real_escape_string($_POST['race'])."', ";
			$query.= " `relation_status`  = '".mysql_real_escape_string($_POST['relation_status'])."', ";
			$query.= " `have_children`  = '".mysql_real_escape_string($_POST['have_children'])."', ";
			$query.= " `live_with_parents`  = '".mysql_real_escape_string($_POST['live_with_parents'])."', ";
			$query.= " `high_level_educ`  = '".mysql_real_escape_string($_POST['high_level_educ'])."', ";
			$query.= " `high_school_attend`  = '".mysql_real_escape_string($_POST['high_school_attend'])."', ";
			$query.= " `guardian_year`  = '".mysql_real_escape_string($_POST['guardian_year'])."', ";
			$query.= " `IEP`  = '".mysql_real_escape_string($_POST['IEP'])."', ";
			$query.= " `attend_cosme_School`  = '".mysql_real_escape_string($_POST['attend_cosme_School'])."', ";
			$query.= " `cosme_school_yes`  = '".mysql_real_escape_string($_POST['cosme_school_yes'])."', ";
			$query.= " `clock_hours`  = '".mysql_real_escape_string($_POST['clock_hours'])."', ";
			$query.= " `first_name_your_tag`  = '".mysql_real_escape_string($_POST['first_name_your_tag'])."', ";
			$query.= " `what_hand`  = '".mysql_real_escape_string($_POST['what_hand'])."', ";
			$query.= " `smock_shirt_size`  = '".mysql_real_escape_string($_POST['smock_shirt_size'])."', ";
			$query.= " `driver_license`  = '".mysql_real_escape_string($_POST['driver_license'])."', ";
			$query.= " `license_number`  = '".mysql_real_escape_string($_POST['license_number'])."', ";
			$query.= " `drive_to_school`  = '".mysql_real_escape_string($_POST['drive_to_school'])."', ";
			$query.= " `vehicle_make`  = '".mysql_real_escape_string($_POST['vehicle_make'])."', ";
			$query.= " `vehicle_color`  = '".mysql_real_escape_string($_POST['vehicle_color'])."', ";
			$query.= " `license_plate`  = '".mysql_real_escape_string($_POST['license_plate'])."', ";
			$query.= " `health_prog`  = '".mysql_real_escape_string($_POST['health_prog'])."', ";
			$query.= " `explain`  = '".mysql_real_escape_string($_POST['explain'])."', ";
			$query.= " `list_medi_take`  = '".mysql_real_escape_string($_POST['list_medi_take'])."', ";
			$query.= " `medi_school`  = '".mysql_real_escape_string($_POST['medi_school'])."', ";
			$query.= " `convected_fel`  = '".mysql_real_escape_string($_POST['convected_fel'])."', ";
			$query.= " `charge`  = '".mysql_real_escape_string($_POST['charge'])."', ";
			$query.= " `apply_fina_aid`  = '".mysql_real_escape_string($_POST['apply_fina_aid'])."', ";
			$query.= " `begun_process`  = '".mysql_real_escape_string($_POST['begun_process'])."', ";
			$query.= " `financ_dep`  = '".mysql_real_escape_string($_POST['financ_dep'])."', ";
			$query.= " `def_loans`  = '".mysql_real_escape_string($_POST['def_loans'])."', ";
			$query.= " `jobs_held`  = '".mysql_real_escape_string($_POST['jobs_held'])."', ";
			$query.= " `like_previ_job`  = '".mysql_real_escape_string($_POST['like_previ_job'])."', ";
			$query.= " `dislike_previ_job`  = '".mysql_real_escape_string($_POST['dislike_previ_job'])."', ";
			$query.= " `how_long`  = '".mysql_real_escape_string($_POST['how_long'])."', ";
			$query.= " `pri_firstname`  = '".mysql_real_escape_string($_POST['pri_firstname'])."', ";
			$query.= " `pri_lastname`  = '".mysql_real_escape_string($_POST['pri_lastname'])."', ";
			$query.= " `pri_phone_number`  = '".mysql_real_escape_string($_POST['pri_phone_number'])."', ";
			$query.= " `pri_relations`  = '".mysql_real_escape_string($_POST['pri_relations'])."', ";
			$query.= " `choose_insti`  = '".mysql_real_escape_string($_POST['choose_insti'])."', ";
			$query.= " `hear`  = '".mysql_real_escape_string($_POST['hear'])."', ";
			$query.= " `other`  = '".mysql_real_escape_string($_POST['other'])."', ";
			$query.= " `ref_person`  = '".mysql_real_escape_string($_POST['ref_person'])."', ";
			$query.= " `contactName`  = '".mysql_real_escape_string($_POST['contactName'])."', ";
			$query.= " `guardianName`  = '".mysql_real_escape_string($_POST['guardianName'])."', ";
			$query.= " `certify`  = '".mysql_real_escape_string($Certify)."' ";
			
			$Run = mysql_query($query);
			
			
			$tableStyle = 'border: 1px solid #ddd;text-align: left; border-collapse: collapse; width: 100%;';        
			$tableCellStyle = 'border: 1px solid #ddd;text-align: left; padding: 12px;';

			
			$To = 'admissions@obriensavedainstitute.org';
			$subject = 'Application';
			
			$message = "	
						<h3>Applications Details</h3>
						<table style='".$tableStyle."'>						
							<tr>
								<th style='".$tableCellStyle."'>Program Interested In</th>
								<td style='".$tableCellStyle."'>".$_POST['program']."</td>
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
								<th style='".$tableCellStyle."'>Email</th>
								<td style='".$tableCellStyle."'>".$_POST['email']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Mailing Address</th>
								<td style='".$tableCellStyle."'>".$_POST['address']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>City</th>
								<td style='".$tableCellStyle."'>".$_POST['city']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>State</th>
								<td style='".$tableCellStyle."'>".$_POST['state']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Zip</th>
								<td style='".$tableCellStyle."'>".$_POST['zip']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Gender</th>
								<td style='".$tableCellStyle."'>".$_POST['gender']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Date of Birth:</th>
								<td style='".$tableCellStyle."'>".$_POST['dob']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Social Security Number</th>
								<td style='".$tableCellStyle."'>".$_POST['soc_secu_number']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Are you a citizen of the United States of America?</th>
								<td style='".$tableCellStyle."'>".$_POST['citizen_usa']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Are you a resident of Vermont?</th>
								<td style='".$tableCellStyle."'>".$_POST['res_vermont']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Race</th>
								<td style='".$tableCellStyle."'>".$_POST['race']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Relationship Status?</th>
								<td style='".$tableCellStyle."'>".$_POST['relation_status']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Do you have any children?</th>
								<td style='".$tableCellStyle."'>".$_POST['have_children']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Do you live with your parents?</th>
								<td style='".$tableCellStyle."'>".$_POST['live_with_parents']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Highest level of education?	</th>
								<td style='".$tableCellStyle."'>".$_POST['high_level_educ']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>What High School did you attend?</th>
								<td style='".$tableCellStyle."'>".$_POST['high_school_attend']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Graduation Year</th>
								<td style='".$tableCellStyle."'>".$_POST['guardian_year']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Do you have an IEP that you wish to submit to us for your file?</th>
								<td style='".$tableCellStyle."'>".$_POST['IEP']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Have you ever attended Cosmetology School?</th>
								<td style='".$tableCellStyle."'>".$_POST['attend_cosme_School']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If Yes, where?</th>
								<td style='".$tableCellStyle."'>".$_POST['cosme_school_yes']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'># of Clock Hours</th>
								<td style='".$tableCellStyle."'>".$_POST['clock_hours']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'> First name as you would like it to appear on your name tag</th>
								<td style='".$tableCellStyle."'>".$_POST['first_name_your_tag']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>What hand are you?</th>
								<td style='".$tableCellStyle."'>".$_POST['what_hand']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Smock/Shirt Size:</th>
								<td style='".$tableCellStyle."'>".$_POST['smock_shirt_size']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Do you have a driver's license?</th>
								<td style='".$tableCellStyle."'>".$_POST['driver_license']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If Yes, License number</th>
								<td style='".$tableCellStyle."'>".$_POST['license_number']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Will you be driving to school?</th>
								<td style='".$tableCellStyle."'>".$_POST['drive_to_school']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Vehicle Make</th>
								<td style='".$tableCellStyle."'>".$_POST['vehicle_make']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Vehicle Color</th>
								<td style='".$tableCellStyle."'>".$_POST['vehicle_color']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>License plate number</th>
								<td style='".$tableCellStyle."'>".$_POST['license_plate']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Do you have any health problems that we should be aware of:</th>
								<td style='".$tableCellStyle."'>".$_POST['health_prog']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If Yes, explain:</th>
								<td style='".$tableCellStyle."'>".$_POST['explain']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Please list any medications you take:</th>
								<td style='".$tableCellStyle."'>".$_POST['list_medi_take']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Will you be taking these medications at school?</th>
								<td style='".$tableCellStyle."'>".$_POST['medi_school']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Have you ever been convicted of a felony?</th>
								<td style='".$tableCellStyle."'>".$_POST['convected_fel']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If yes, what was the charge?</th>
								<td style='".$tableCellStyle."'>".$_POST['charge']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Will you be applying for financial aid?</th>
								<td style='".$tableCellStyle."'>".$_POST['apply_fina_aid']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Have you begun the process yet?	</th>
								<td style='".$tableCellStyle."'>".$_POST['begun_process']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Have you been in contact with our financial aid department yet?</th>
								<td style='".$tableCellStyle."'>".$_POST['financ_dep']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Do you have defaulted loans?</th>
								<td style='".$tableCellStyle."'>".$_POST['def_loans']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>What types of jobs have you held?</th>
								<td style='".$tableCellStyle."'>".$_POST['jobs_held']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>What did you like about your previous job?</th>
								<td style='".$tableCellStyle."'>".$_POST['like_previ_job']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>What did you dislike about your previous job?</th>
								<td style='".$tableCellStyle."'>".$_POST['dislike_previ_job']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>How long have you wanted to be in this field?</th>
								<td style='".$tableCellStyle."'>".$_POST['how_long']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Primary First Name</th>
								<td style='".$tableCellStyle."'>".$_POST['pri_firstname']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Primary Last Name</th>
								<td style='".$tableCellStyle."'>".$_POST['pri_lastname']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Primary Phone Number</th>
								<td style='".$tableCellStyle."'>".$_POST['pri_phone_number']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Relationship to you</th>
								<td style='".$tableCellStyle."'>".$_POST['pri_relations']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>What made you choose our Institute?</th>
								<td style='".$tableCellStyle."'>".$_POST['choose_insti']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>How did you hear about us?</th>
								<td style='".$tableCellStyle."'>".$_POST['hear']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Other:</th>
								<td style='".$tableCellStyle."'>".$_POST['other']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If referred by a person or salon, who was it?</th>
								<td style='".$tableCellStyle."'>".$_POST['ref_person']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>Your Name</th>
								<td style='".$tableCellStyle."'>".$_POST['contactName']."</td>
							</tr>

							<tr>
								<th style='".$tableCellStyle."'>If under 18, Your Guardians Name:</th>
								<td style='".$tableCellStyle."'>".$_POST['guardianName']."</td>
							</tr>
									
							<tr>
								<th style='".$tableCellStyle."'>Agree Certify</th>
								<td style='".$tableCellStyle."'>Yes</td>
							</tr>
	
						</table>
					
					<br>
					<h4>Thanks......</h4>
					<h4>AVEDA INSTITUTE</h4>
			";
			
			
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";			
			
			mail($To,$subject,$message,$headers);
			
			@header("Location:?mode=succes");
			//$Success = 'ok';
		}
		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlencode($apply_nowRecord['meta_title']) ?></title>
<meta name="description" content="<?php echo htmlencode($apply_nowRecord['meta_description']) ?>" />
<meta name="keywords" content="<?php echo htmlencode($apply_nowRecord['meta_keywords']) ?>" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/media_s.css">
<link rel="stylesheet" href="../royalslider/royalslider2.css">
<link rel="stylesheet" href="../royalslider/skins/default/rs-default.css">
<script src='../royalslider/jquery-1.8.3.min.js'></script>
<script src="../royalslider/jquery.royalslider.min.js"></script>
<script src="/js/mobile_number_script.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<?php 
	if(isset($ArrError) && is_array($ArrError) && count($ArrError) >0 || isset($Success) && $Success == 'ok'){ ?> 
		<script>
			$(document).ready(function(){
				$("html, body").animate({ scrollTop: 400 }, "slow");	
			});			
		</script>
	<?php 
	}
?>
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
		  
		    $( function() {
				$( "#datepicker" ).datepicker({dateFormat: "mm/dd/yy"});
			  } );
			  
				
			$(document).ready(function(){			 
				
				$(function () {
					$('#soc_secu_number').keydown(function (e) {
					var key = e.charCode || e.keyCode || 0;
					$text = $(this); 
					if (key !== 8 && key !== 9) {
						if ($text.val().length === 3) {
							$text.val($text.val() + '-');
						}
						if ($text.val().length === 6) {
							$text.val($text.val() + '-');
						}
					}

						return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
					})
				});
			});
          </script>
</head>

<body>
<?php include '../includes/header.php';?>
<div class="royalSlider rsDefault">
    
<?php foreach ($apply_nowRecord['header_image'] as $index => $upload): ?>
  <div style="color:<?php echo htmlencode($upload['info2']) ?>">
    <div class="billboardtext2" style="color:<?php echo htmlencode($upload['info2']) ?>">APPLY NOW
    <div class="billboardsubtext" style="color:<?php echo htmlencode($upload['info2']) ?>"><?php echo htmlencode($upload['info1']) ?></div>
    </div>
    <img class="rsImg c-img-contact rsMainSlideImage" src="<?php echo htmlencode($upload['urlPath']) ?>" />
    </div>

<?php endforeach ?>

</div>
<script>
    jQuery(document).ready(function($) {
        $(".royalSlider").royalSlider({           
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
<?php if(isset($apply_nowRecord['sub_text']) && !empty($apply_nowRecord['sub_text'])) { echo htmlencode($apply_nowRecord['sub_text']); } ?></div></div></div>
<div class="programssub">
<div class="wrapper"><?php echo $apply_nowRecord['content']; ?>
	<br /><br /><br />

	<?php if(isset($_GET['mode']) && $_GET['mode'] == 'succes') { ?>
		<h2>Thank You !</h2>
		<h5>We Have Received Your Application Details......</h5>
	<?php } else { ?> 
	<form id="requestinfoform" class="form" action="" method="POST">

	<div class="formfield2">
		<label class="contactform" for="program">Program Interested In:*<span class="error"></span></label><br />
		<select id="program" name="program" size="1" class="dropdown">
			<option value="">Select Program</option>
			<option <?php if(isset($_POST['program']) && $_POST['program'] == 'Cosmetology') { echo 'selected=selected';}?> value="Cosmetology">Cosmetology</option>
			<option <?php if(isset($_POST['program']) && $_POST['program'] == 'Barbering') { echo 'selected=selected';}?> value="Barbering">Barbering</option>
			<option <?php if(isset($_POST['program']) && $_POST['program'] == 'Nail Technology') { echo 'selected=selected';}?> value="Nail Technology">Nail Technology</option>
<option <?php if(isset($_POST['program']) && $_POST['program'] == 'Esthetics') { echo 'selected=selected';}?> value="Esthetics">Esthetics</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['program']) && !empty($ArrError['program'])) { echo $ArrError['program'];}?></span>
	</div>


	<div class="formfield">
		<label class="contactform" for="firstname">First Name*<span class="error"></span></label><br />
		<input id="firstname" name="firstname" type="text" value="<?php if(isset($_POST['firstname']) && !empty($_POST['firstname'])) { echo $_POST['firstname'];}?>" class="textfield1" />
		</br>
		<span class="c_error"><?php if(isset($ArrError['firstname']) && !empty($ArrError['firstname'])) { echo $ArrError['firstname'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="lastname">Last Name*<span class="error"></span></label><br />
		<input id="lastname" name="lastname" type="text" value="<?php if(isset($_POST['lastname']) && !empty($_POST['lastname'])) { echo $_POST['lastname'];}?>" class="textfield1" />
		</br>
		<span class="c_error"><?php if(isset($ArrError['lastname']) && !empty($ArrError['lastname'])) { echo $ArrError['lastname'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="phone">Phone Number*<span class="error"></span></label><br />
		<input id="phone" name="phone" type="text" value="<?php if(isset($_POST['phone']) && !empty($_POST['phone'])) { echo $_POST['phone'];}?>" class="textfield1" onkeypress="return isNumberKey(event);" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['phone']) && !empty($ArrError['phone'])) { echo $ArrError['phone'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="email">Email*<span class="error"></span></label><br />
		<input id="email" name="email" type="text" value="<?php if(isset($_POST['email']) && !empty($_POST['email'])) { echo $_POST['email'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['email']) && !empty($ArrError['email'])) { echo $ArrError['email'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="address">Mailing Address*<span class="error"></span></label><br />
		<input id="address" name="address" type="text" value="<?php if(isset($_POST['address']) && !empty($_POST['address'])) { echo $_POST['address'];}?>" class="textfield1" />
		</br>
		<span class="c_error"><?php if(isset($ArrError['address']) && !empty($ArrError['address'])) { echo $ArrError['address'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="city">City*<span class="error"></span></label><br />
		<input id="city" name="city" type="text" value="<?php if(isset($_POST['city']) && !empty($_POST['city'])) { echo $_POST['city'];}?>"  class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['city']) && !empty($ArrError['city'])) { echo $ArrError['city'];}?></span>
	</div>

	<div class="formfield3">
		<label class="contactform" for="state">State*<span class="error"></span></label><br />
		<!----<input id="state" name="state" type="text" value="<?php if(isset($_POST['state']) && !empty($_POST['state'])) { echo $_POST['state'];}?>" class="textfield3"/>--->
		<select id="state" name="state" size="1" class="dropdown" style="width:95% !important;">
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'AL') { echo 'selected=selected';}?> value="AL">Alabama</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'AK') { echo 'selected=selected';}?> value="AK">Alaska</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'AZ') { echo 'selected=selected';}?> value="AZ">Arizona</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'AR') { echo 'selected=selected';}?> value="AR">Arkansas</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'CA') { echo 'selected=selected';}?> value="CA">California</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'CO') { echo 'selected=selected';}?> value="CO">Colorado</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'CT') { echo 'selected=selected';}?> value="CT">Connecticut</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'DE') { echo 'selected=selected';}?> value="DE">Delaware</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'DC') { echo 'selected=selected';}?> value="DC">District Of Columbia</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'FL') { echo 'selected=selected';}?> value="FL">Florida</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'GA') { echo 'selected=selected';}?> value="GA">Georgia</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'HI') { echo 'selected=selected';}?> value="HI">Hawaii</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'ID') { echo 'selected=selected';}?> value="ID">Idaho</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'IL') { echo 'selected=selected';}?> value="IL">Illinois</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'IN') { echo 'selected=selected';}?> value="IN">Indiana</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'IA') { echo 'selected=selected';}?> value="IA">Iowa</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'KS') { echo 'selected=selected';}?> value="KS">Kansas</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'KY') { echo 'selected=selected';}?> value="KY">Kentucky</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'LA') { echo 'selected=selected';}?> value="LA">Louisiana</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'ME') { echo 'selected=selected';}?> value="ME">Maine</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MD') { echo 'selected=selected';}?> value="MD">Maryland</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MA') { echo 'selected=selected';}?> value="MA">Massachusetts</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MI') { echo 'selected=selected';}?> value="MI">Michigan</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MN') { echo 'selected=selected';}?> value="MN">Minnesota</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MS') { echo 'selected=selected';}?> value="MS">Mississippi</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MO') { echo 'selected=selected';}?> value="MO">Missouri</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'MT') { echo 'selected=selected';}?> value="MT">Montana</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NE') { echo 'selected=selected';}?> value="NE">Nebraska</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NV') { echo 'selected=selected';}?> value="NV">Nevada</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NH') { echo 'selected=selected';}?> value="NH">New Hampshire</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NJ') { echo 'selected=selected';}?> value="NJ">New Jersey</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NM') { echo 'selected=selected';}?> value="NM">New Mexico</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NY') { echo 'selected=selected';}?> value="NY">New York</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'NC') { echo 'selected=selected';}?> value="NC">North Carolina</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'ND') { echo 'selected=selected';}?> value="ND">North Dakota</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'OH') { echo 'selected=selected';}?> value="OH">Ohio</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'OK') { echo 'selected=selected';}?> value="OK">Oklahoma</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'OR') { echo 'selected=selected';}?> value="OR">Oregon</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'PA') { echo 'selected=selected';}?> value="PA">Pennsylvania</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'RI') { echo 'selected=selected';}?> value="RI">Rhode Island</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'SC') { echo 'selected=selected';}?> value="SC">South Carolina</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'SD') { echo 'selected=selected';}?> value="SD">South Dakota</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'TN') { echo 'selected=selected';}?> value="TN">Tennessee</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'TX') { echo 'selected=selected';}?> value="TX">Texas</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'UT') { echo 'selected=selected';}?> value="UT">Utah</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'VT') { echo 'selected=selected';}?> value="VT">Vermont</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'VA') { echo 'selected=selected';}?> value="VA">Virginia</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'WA') { echo 'selected=selected';}?> value="WA">Washington</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'WV') { echo 'selected=selected';}?> value="WV">West Virginia</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'WI') { echo 'selected=selected';}?> value="WI">Wisconsin</option>
			<option <?php if(isset($_POST['state']) && $_POST['state'] == 'WY') { echo 'selected=selected';}?> value="WY">Wyoming</option>
		</select>	
		
		</br>
		<span class="c_error"><?php if(isset($ArrError['state']) && !empty($ArrError['state'])) { echo $ArrError['state'];}?></span>
	</div>

	<div class="formfield3">
		<label class="contactform" for="zip">Zip*<span class="error"></span></label><br />
		<input id="zip" name="zip" type="text" value="<?php if(isset($_POST['zip']) && !empty($_POST['zip'])) { echo $_POST['zip'];}?>" class="textfield3"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['zip']) && !empty($ArrError['zip'])) { echo $ArrError['zip'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="gender">Gender<span class="error"></span></label><br />
		<select id="gender" name="gender" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') { echo 'selected=selected';}?> value="Female">Female</option>
			<option <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') { echo 'selected=selected';}?> value="Male">Male</option>
			<option <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Prefer Not to Say') { echo 'selected=selected';}?> value="Prefer Not to Say">Prefer Not to Say</option>
		</select>
	</div>

	<div class="formfield3">
		<label class="contactform" for="dob">Date of Birth:*<span class="error"></span></label><br />
		<input id="datepicker" name="dob" type="text" value="<?php if(isset($_POST['dob']) && !empty($_POST['dob'])) { echo $_POST['dob'];}?>" class="textfield3"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['dob']) && !empty($ArrError['dob'])) { echo $ArrError['dob'];}?></span>
	</div>

	<div style="height:50px;clear:both"></div>

	<div class="formfield">
		<label class="contactform" for="soc_secu_number">Social Security Number:*<span class="error"></span></label><br />
		<input id="soc_secu_number" name="soc_secu_number" type="text" value="<?php if(isset($_POST['soc_secu_number']) && !empty($_POST['soc_secu_number'])) { echo $_POST['soc_secu_number'];}?>" class="textfield1" maxlength="11"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['soc_secu_number']) && !empty($ArrError['soc_secu_number'])) { echo $ArrError['soc_secu_number'];}?></span>
	</div>
	<div style="height:50px;clear:both"></div>


	<div class="formfield2">
		<label class="contactform" for="citizen_usa">Are you a citizen of the United States of America?*<span class="error"></span></label><br />
		<select id="citizen_usa" name="citizen_usa" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['citizen_usa']) && $_POST['citizen_usa'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['citizen_usa']) && $_POST['citizen_usa'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['citizen_usa']) && !empty($ArrError['citizen_usa'])) { echo $ArrError['citizen_usa'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="res_vermont">Are you a resident of Vermont?*
		<span class="error"></span></label><br />

		<select id="res_vermont" name="res_vermont" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['res_vermont']) && $_POST['res_vermont'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['res_vermont']) && $_POST['res_vermont'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['res_vermont']) && !empty($ArrError['res_vermont'])) { echo $ArrError['res_vermont'];}?></span>
	</div>
	
	<div class="formfield2">
		<label class="contactform" for="race">Race:*<span class="error"></span></label><br />

		<select id="race" name="race" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'White/Caucasion') { echo 'selected=selected';}?> value="White/Caucasion">White/Caucasion</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'Black/Non Hispanic') { echo 'selected=selected';}?> value="Black/Non Hispanic">Black/Non Hispanic</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'Asian/Pacific Islander') { echo 'selected=selected';}?> value="Asian/Pacific Islander">Asian/Pacific Islander</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'American Indian') { echo 'selected=selected';}?> value="American Indian">American Indian</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'Hispanic') { echo 'selected=selected';}?> value="Hispanic">Hispanic</option>
			<option <?php if(isset($_POST['race']) && $_POST['race'] == 'Other') { echo 'selected=selected';}?> value="Other">Other</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['race']) && !empty($ArrError['race'])) { echo $ArrError['race'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="relation_status">Relationship Status?*<span class="error"></span></label><br />

		<select id="relation_status" name="relation_status" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['relation_status']) && $_POST['relation_status'] == 'Married') { echo 'selected=selected';}?> value="Married">Married</option>
			<option <?php if(isset($_POST['relation_status']) && $_POST['relation_status'] == 'Divorced') { echo 'selected=selected';}?> value="Divorced">Divorced</option>
			<option <?php if(isset($_POST['relation_status']) && $_POST['relation_status'] == 'Seperated') { echo 'selected=selected';}?> value="Seperated">Seperated</option>
			<option <?php if(isset($_POST['relation_status']) && $_POST['relation_status'] == 'Single') { echo 'selected=selected';}?> value="Single">Single</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['relation_status']) && !empty($ArrError['relation_status'])) { echo $ArrError['relation_status'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="have_children">Do you have any children?*<span class="error"></span></label><br />

		<select id="have_children" name="have_children" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['have_children']) && $_POST['have_children'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['have_children']) && $_POST['have_children'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['have_children']) && !empty($ArrError['have_children'])) { echo $ArrError['have_children'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="live_with_parents">Do you live with your parents?*<span class="error"></span></label><br />

		<select id="live_with_parents" name="live_with_parents" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['live_with_parents']) && $_POST['live_with_parents'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['live_with_parents']) && $_POST['live_with_parents'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['live_with_parents']) && !empty($ArrError['live_with_parents'])) { echo $ArrError['live_with_parents'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="high_level_educ">Highest level of education?*<span class="error"></span></label><br />
		<select id="high_level_educ" name="high_level_educ" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['high_level_educ']) && $_POST['high_level_educ'] == 'Some College') { echo 'selected=selected';}?> value="Some College">Some College</option>
			<option <?php if(isset($_POST['high_level_educ']) && $_POST['high_level_educ'] == 'High School Diploma') { echo 'selected=selected';}?> value="High School Diploma">High School Diploma</option>
			<option <?php if(isset($_POST['high_level_educ']) && $_POST['high_level_educ'] == 'GED') { echo 'selected=selected';}?> value="GED">GED</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['high_level_educ']) && !empty($ArrError['high_level_educ'])) { echo $ArrError['high_level_educ'];}?></span>
	</div>


	<div class="formfield">
		<label class="contactform" for="high_school_attend">What High School did you attend?*<span class="error"></span></label><br />
		<input id="high_school_attend" name="high_school_attend" type="text" value="<?php if(isset($_POST['high_school_attend']) && !empty($_POST['high_school_attend'])) { echo $_POST['high_school_attend'];}?>"  class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['high_school_attend']) && !empty($ArrError['high_school_attend'])) { echo $ArrError['high_school_attend'];}?></span>
	</div>

	<div class="formfield3">
		<label class="contactform" for="guardian_year">Graduation Year:*<span class="error"></span></label><br />
		<input id="guardian_year" name="guardian_year" type="text" value="<?php if(isset($_POST['guardian_year']) && !empty($_POST['guardian_year'])) { echo $_POST['guardian_year'];}?>" class="textfield3"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['guardian_year']) && !empty($ArrError['guardian_year'])) { echo $ArrError['guardian_year'];}?></span>
	</div>


	<div class="formfield2">
		<label class="contactform" for="IEP">Do you have an IEP that you wish to submit to us for your file?*<span class="error"></span></label><br />

		<select id="IEP" name="IEP" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['IEP']) && $_POST['IEP'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['IEP']) && $_POST['IEP'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['IEP']) && !empty($ArrError['IEP'])) { echo $ArrError['IEP'];}?></span>
	</div>


	<div class="formfield2">
		<label class="contactform" for="attend_cosme_School">Have you ever attended Cosmetology School?*<span class="error"></span></label><br />

		<select id="attend_cosme_School" name="attend_cosme_School" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['attend_cosme_School']) && $_POST['attend_cosme_School'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['attend_cosme_School']) && $_POST['attend_cosme_School'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['attend_cosme_School']) && !empty($ArrError['attend_cosme_School'])) { echo $ArrError['attend_cosme_School'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="cosme_school_yes">If Yes, where?*<span class="error"></span></label><br />
		<input id="cosme_school_yes" name="cosme_school_yes" type="text" value="<?php if(isset($_POST['cosme_school_yes']) && !empty($_POST['cosme_school_yes'])) { echo $_POST['cosme_school_yes'];}?>"  class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['cosme_school_yes']) && !empty($ArrError['cosme_school_yes'])) { echo $ArrError['cosme_school_yes'];}?></span>
	</div>

	<div class="formfield3">
		<label class="contactform" for="clock_hours"># of Clock Hours:*<span class="error"></span></label><br />
		<input id="clock_hours" name="clock_hours" type="text" value="<?php if(isset($_POST['clock_hours']) && !empty($_POST['clock_hours'])) { echo $_POST['clock_hours'];}?>" class="textfield3"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['clock_hours']) && !empty($ArrError['clock_hours'])) { echo $ArrError['clock_hours'];}?></span>
	</div>

	<div style="height:50px;clear:both"></div>
	
	<div class="formfield">
		<label class="contactform" for="first_name_your_tag">First name as you would like it to appear on your name tag*<span class="error"></span></label><br />
		<input id="first_name_your_tag" name="first_name_your_tag" type="text" value="<?php if(isset($_POST['first_name_your_tag']) && !empty($_POST['first_name_your_tag'])) { echo $_POST['first_name_your_tag'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['first_name_your_tag']) && !empty($ArrError['first_name_your_tag'])) { echo $ArrError['first_name_your_tag'];}?></span>
	</div>
	
	<div class="formfield2">
		<label class="contactform" for="what_hand">What hand are you?<span class="error"></span></label><br />
		<select id="what_hand" name="what_hand" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['what_hand']) && $_POST['what_hand'] == 'Right') { echo 'selected=selected';}?> value="Right">Right</option>
			<option <?php if(isset($_POST['what_hand']) && $_POST['what_hand'] == 'Left') { echo 'selected=selected';}?> value="Left">Left</option>
		</select>
		</br>
		<span class="c_error"></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="smock_shirt_size">Smock/Shirt Size:<span class="error"></span></label><br />
		<select id="smock_shirt_size" name="smock_shirt_size" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == 'XS') { echo 'selected=selected';}?> value="XS">XS</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == 'S') { echo 'selected=selected';}?> value="S">S</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == 'M') { echo 'selected=selected';}?> value="M">M</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == 'L') { echo 'selected=selected';}?> value="L">L</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == 'XL') { echo 'selected=selected';}?> value="XL">XL</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == '2XL') { echo 'selected=selected';}?> value="2XL">2XL</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == '3XL') { echo 'selected=selected';}?> value="3XL">3XL</option>
			<option <?php if(isset($_POST['smock_shirt_size']) && $_POST['smock_shirt_size'] == '4XL') { echo 'selected=selected';}?> value="4XL">4XL</option>
		</select>
		</br>
		<span class="c_error"></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="driver_license">Do you have a driver's license?*<span class="error"></span></label><br />
		<select id="driver_license" name="driver_license" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['driver_license']) && $_POST['driver_license'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['driver_license']) && $_POST['driver_license'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['driver_license']) && !empty($ArrError['driver_license'])) { echo $ArrError['driver_license'];}?></span>
	</div>
	
	<div class="formfield">
		<label class="contactform" for="license_number">If Yes, License number:*<span class="error"></span></label><br />
		<input id="license_number" name="license_number" type="text" value="<?php if(isset($_POST['license_number']) && !empty($_POST['license_number'])) { echo $_POST['license_number'];}?>"  class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['license_number']) && !empty($ArrError['license_number'])) { echo $ArrError['license_number'];}?></span>
	</div>


	<div class="formfield2">
		<label class="contactform" for="drive_to_school">Will you be driving to school?*<span class="error"></span></label><br />
		<select id="drive_to_school" name="drive_to_school" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['drive_to_school']) && $_POST['drive_to_school'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['drive_to_school']) && $_POST['drive_to_school'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		</br>
		<span class="c_error"><?php if(isset($ArrError['drive_to_school']) && !empty($ArrError['drive_to_school'])) { echo $ArrError['drive_to_school'];}?></span>
	</div>


	<div class="formfield">
		<label class="contactform" for="vehicle_make">Vehicle Make:*<span class="error"></span></label><br />
		<input id="vehicle_make" name="vehicle_make" type="text" value="<?php if(isset($_POST['vehicle_make']) && !empty($_POST['vehicle_make'])) { echo $_POST['vehicle_make'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['vehicle_make']) && !empty($ArrError['vehicle_make'])) { echo $ArrError['vehicle_make'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="vehicle_color">Vehicle Color:*<span class="error"></span></label><br />
		<input id="vehicle_color" name="vehicle_color" type="text" value="<?php if(isset($_POST['vehicle_color']) && !empty($_POST['vehicle_color'])) { echo $_POST['vehicle_color'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['vehicle_color']) && !empty($ArrError['vehicle_color'])) { echo $ArrError['vehicle_color'];}?></span>
	</div>


	<div class="formfield3">
		<label class="contactform" for="license_plate">License plate number:*<span class="error"></span></label><br />
		<input id="license_plate" name="license_plate" type="text" value="<?php if(isset($_POST['license_plate']) && !empty($_POST['license_plate'])) { echo $_POST['license_plate'];}?>" class="textfield3"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['license_plate']) && !empty($ArrError['license_plate'])) { echo $ArrError['license_plate'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="health_prog">Do you have any health problems that we should be aware of:<span class="error"></span></label><br />

		<select id="health_prog" name="health_prog" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['health_prog']) && $_POST['health_prog'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['health_prog']) && $_POST['health_prog'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>
	
	<div class="formfield">
		<label class="contactform" for="explain">If Yes, explain:<span class="error"></span></label><br />
		<input id="explain" name="explain" type="text" value="<?php if(isset($_POST['explain']) && !empty($_POST['explain'])) { echo $_POST['explain'];}?>"  class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['explain']) && !empty($ArrError['explain'])) { echo $ArrError['explain'];}?></span>
	</div>


	<div class="formfield">
		<label class="contactform" for="list_medi_take">Please list any medications you take:*<span class="error"></span></label><br />
		<input id="list_medi_take" name="list_medi_take" type="text" value="<?php if(isset($_POST['list_medi_take']) && !empty($_POST['list_medi_take'])) { echo $_POST['list_medi_take'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['list_medi_take']) && !empty($ArrError['list_medi_take'])) { echo $ArrError['list_medi_take'];}?></span>
	</div>
	<div style="height:50px;clear:both"></div>

	<div class="formfield2">
		<label class="contactform" for="medi_school">Will you be taking these medications at school?<span class="error"></span></label><br />
		<select id="medi_school" name="medi_school" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['medi_school']) && $_POST['medi_school'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['medi_school']) && $_POST['medi_school'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>


	<div class="formfield2">
		<label class="contactform" for="convected_fel">Have you ever been convicted of a felony? <span class="error"></span></label><br />
		<select id="convected_fel" name="convected_fel" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['convected_fel']) && $_POST['convected_fel'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['convected_fel']) && $_POST['convected_fel'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>

	<div class="formfield">
		<label class="contactform" for="charge">If yes, what was the charge?*<span class="error"></span></label><br />
		<input id="charge" name="charge" type="text" value="<?php if(isset($_POST['charge']) && !empty($_POST['charge'])) { echo $_POST['charge'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['charge']) && !empty($ArrError['charge'])) { echo $ArrError['charge'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="sdf">*If you have been convicted of a felony you must contact the State of Vermont Office of Professional Regulation to confirm that you will be eligible for licensing*</label>
	</div>
	
	<div style="height:50px;clear:both"></div>
	
	<div class="formfield2">
		<label class="contactform" for="apply_fina_aid">Will you be applying for financial aid?<span class="error"></span></label><br />
		<select id="apply_fina_aid" name="apply_fina_aid" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['apply_fina_aid']) && $_POST['apply_fina_aid'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['apply_fina_aid']) && $_POST['apply_fina_aid'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
		
	</div>

	<div class="formfield2">
		<label class="contactform" for="begun_process">Have you begun the process yet?<span class="error"></span></label><br />
		<select id="begun_process" name="begun_process" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['begun_process']) && $_POST['begun_process'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['begun_process']) && $_POST['begun_process'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>


	<div class="formfield2">
		<label class="contactform" for="financ_dep">Have you been in contact with our financial aid department yet?<span class="error"></span></label><br />
		<select id="financ_dep" name="financ_dep" size="1" class="dropdown">
			<option value="">Select One</option>
			<option <?php if(isset($_POST['financ_dep']) && $_POST['financ_dep'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['financ_dep']) && $_POST['financ_dep'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>

	<div class="formfield2">
		<label class="contactform" for="def_loans">Do you have defaulted loans?<span class="error"></span></label><br />	
		<select id="def_loans" name="def_loans" size="1" class="dropdown">	
			<option value="">Select One</option>
			<option <?php if(isset($_POST['def_loans']) && $_POST['def_loans'] == 'Yes') { echo 'selected=selected';}?> value="Yes">Yes</option>
			<option <?php if(isset($_POST['def_loans']) && $_POST['def_loans'] == 'No') { echo 'selected=selected';}?> value="No">No</option>
		</select>
	</div>


	<div style="height:50px;clear:both"></div>

	<div class="formfield2">
		<label class="contactform" for="jobs_held">What types of jobs have you held?</label><br />
		<input id="jobs_held" name="jobs_held" type="text" value="<?php if(isset($_POST['jobs_held']) && !empty($_POST['jobs_held'])) { echo $_POST['jobs_held'];}?>" class="textfield1" />
	</div>
	
	<div class="formfield2">
		<label class="contactform" for="like_previ_job">What did you like about your previous job?</label><br />
		<input id="like_previ_job" name="like_previ_job" type="text" value="<?php if(isset($_POST['like_previ_job']) && !empty($_POST['like_previ_job'])) { echo $_POST['like_previ_job'];}?>" class="textfield1" />
	</div>
	
	<div class="formfield2">
		<label class="contactform" for="dislike_previ_job">What did you dislike about your previous job?</label><br />
		<input id="dislike_previ_job" name="dislike_previ_job" type="text" value="<?php if(isset($_POST['dislike_previ_job']) && !empty($_POST['dislike_previ_job'])) { echo $_POST['dislike_previ_job'];}?>" class="textfield1" />
	</div>

	<div class="formfield2">
		<label class="contactform" for="how_long">How long have you wanted to be in this field?</label><br />
		<input id="how_long" name="how_long" type="text" value="<?php if(isset($_POST['how_long']) && !empty($_POST['how_long'])) { echo $_POST['how_long'];}?>" class="textfield1" />
	</div>
	
	<div class="formfield2">
		In the event of an emergency, who is your primary contact?
	</div>
		
	<div class="formfield">
		<label class="contactform" for="pri_firstname">First Name*<span class="error"></span></label><br />
		<input id="pri_firstname" name="pri_firstname" type="text" value="<?php if(isset($_POST['pri_firstname']) && !empty($_POST['pri_firstname'])) { echo $_POST['pri_firstname'];}?>" class="textfield1" />
		</br>
		<span class="c_error"><?php if(isset($ArrError['pri_firstname']) && !empty($ArrError['pri_firstname'])) { echo $ArrError['pri_firstname'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="pri_lastname">Last Name*<span class="error"></span></label><br />
		<input id="pri_lastname" name="pri_lastname" type="text" value="<?php if(isset($_POST['pri_lastname']) && !empty($_POST['pri_lastname'])) { echo $_POST['pri_lastname'];}?>" class="textfield1" />
		</br>
		<span class="c_error"><?php if(isset($ArrError['pri_lastname']) && !empty($ArrError['pri_lastname'])) { echo $ArrError['pri_lastname'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="pri_phone_number">Phone Number*<span class="error"></span></label><br />
		<input id="pri_phone_number" name="pri_phone_number" type="text" value="<?php if(isset($_POST['pri_phone_number']) && !empty($_POST['pri_phone_number'])) { echo $_POST['pri_phone_number'];}?>" class="textfield1" onkeypress="return isNumberKey(event);" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['pri_phone_number']) && !empty($ArrError['pri_phone_number'])) { echo $ArrError['pri_phone_number'];}?></span>
	</div>

	<div class="formfield">
		<label class="contactform" for="pri_relations">Relationship to you:<span class="error"></span></label><br />
		<input id="pri_relations" name="pri_relations" type="text" value="<?php if(isset($_POST['pri_relations']) && !empty($_POST['pri_relations'])) { echo $_POST['pri_relations'];}?>" class="textfield1"/>
	</div>

	<div class="formfield2">
		<label class="contactform" for="choose_insti">What made you choose our Institute?</label><br />
		<input id="choose_insti" name="choose_insti" type="text" value="<?php if(isset($_POST['choose_insti']) && !empty($_POST['choose_insti'])) { echo $_POST['choose_insti'];}?>" class="textfield1" />
	</div>




	<div class="formfield2">
		<label  for="hear">How did you hear about us?:*<span class="error"></span></label><br />
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
		</br>
		<span class="c_error"><?php if(isset($ArrError['hear']) && !empty($ArrError['hear'])) { echo $ArrError['hear'];}?></span>
	</div>

	<div class="formfield2">
		<label class="contactform" for="other">Other:</label><br />
		<input id="other" name="other" type="text" value="<?php if(isset($_POST['other']) && !empty($_POST['other'])) { echo $_POST['other'];}?>" class="textfield1" />
	</div>

	<div class="formfield2">
		<label class="contactform" for="ref_person">If referred by a person or salon, who was it?</label><br />
		<input id="ref_person" name="ref_person" type="text" value="<?php if(isset($_POST['ref_person']) && !empty($_POST['ref_person'])) { echo $_POST['ref_person'];}?>" class="textfield1" />
	</div>
	
	<div style="clear:both"></div>
	<div>
		<h3>The following documents are also required to complete your enrollment application:</h3>
		<li>This completed application</li>
		<li>Non-refundable application fee of $50</li>
		<li>MMR Immunization Record (Measles, Mumps, Rubella)</li>
		<li>Copy of High School Diploma or GED (If using transcripts must submit 2 SEALED copies)</li>
		<li>Copy of valid photo ID</li>
		<li>Copy of Birth Certificate, Social Security Card, OR Passport</li><br />
		400 CORNERSTONE DRIVE<br />WILLISTON, VT 05495 (802) 876-7044<br /><br />
		 If you are applying for financial aid please do so at <a href="http://www.fafsa.ed.gov" target="_blank">www.fafsa.ed.gov</a> For Vermont Residents, please also complete the VSAC Incentive Grant at <a href="http://www.vsac.org" target="_blank">www.vsac.org</a> It is encouraged that you schedule an appointment with our Financial Aid department to discuss your application and needs.<br /><br />
		<input type="checkbox" name="certify">I certify that the information I have provided for admissions to Aveda Institute Williston is complete and accurate to the best of my knowledge. I understand that misrepresentation of information is sufficient grounds for canceling my admission to Aveda Institute Williston. I also understand that this application does not guarantee my admission to the Institute. I am not considered enrolled until I have completed all admission requirements and received an acceptance letter.
		<br>
		<span class="c_error"><?php if(isset($ArrError['certify']) && !empty($ArrError['certify'])) { echo $ArrError['certify'];}?></span>
		</div><br />
	
	<div class="formfield">
		<label class="contactform" for="contactName">Your Name:*<span class="error"></span></label><br />
		<input id="contactName" name="contactName" type="text" value="<?php if(isset($_POST['contactName']) && !empty($_POST['contactName'])) { echo $_POST['contactName'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['contactName']) && !empty($ArrError['contactName'])) { echo $ArrError['contactName'];}?></span>
	</div>
	
	<div class="formfield">
		<label class="contactform" for="guardianName">If under 18, Your Guardians Name:*<span class="error"></span></label><br />
		<input id="guardianName" name="guardianName" type="text" value="<?php if(isset($_POST['guardianName']) && !empty($_POST['guardianName'])) { echo $_POST['guardianName'];}?>" class="textfield1"/>
		</br>
		<span class="c_error"><?php if(isset($ArrError['guardianName']) && !empty($ArrError['guardianName'])) { echo $ArrError['guardianName'];}?></span>
	</div>
<div class="formfield">
<div id="g-recaptcha" data-sitekey="6LePxwcUAAAAALmudwVqcu1FKXkP1BDhiYeuf7_o"></div>
    <div class="error c-captcha"><?php if(isset($not_a_robot) && !empty($not_a_robot)) { echo $not_a_robot;}?></div>
</div><br>
		<div style="height:50px;clear:both"></div>
      
		<input type="submit" value="Submit" id="submit" class="formbutton" name="submit"/> <br /> <em>*Required field</em>

	</form>
	
	<?php } ?>
  <div style="clear: both;"></div> 
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