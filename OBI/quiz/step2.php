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

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	<script>
		$(document).ready(function(){
			
			var is_selected = false;
			/* make selected box */
			$(".quizitem").click(function(){
				var _this = $(this);
				
				/* Selected val and type */
				var val = _this.attr("data-val");
				var type = _this.attr("data-type");
				
				
				
				$(".quizitem").each(function(){
					$(this).removeClass("c-border-sel");
				});
				_this.addClass("c-border-sel");
				is_selected = true;
				
				$(".c-preferred_work_enviroment_val").val(val);
				$(".c-preferred_work_enviroment_type").val(type);
			});
			
			<?php
			if(isset($_SESSION['sess_step2']['preferred_work_enviroment_type'])) {
				?>
				is_selected = true;
				<?php
			}
			?>
			
			/* form submit */
			$(".quizbutton2").click(function(){
				if(is_selected==true)	{
					$("#idfrm2").submit();
				} else {
					alert("Please select one of these three circle.");
				}
				
				
			});
			
		});
	</script>
	<style>
		.c-border-sel {
			border: 10px solid #AACA4A !important;
		}
		.c-display-none {
			display:none;
		}
		.c-opacity {
			opacity:0;
			position:absulute;
		}
	</style>
</head>

<body>
<?php include '../includes/header.php';?>
<div style="clear: both;"></div>

	<div class="quizsub">
		<div class="wrapper">
			<h1>Step 1 of 4</h1>
			WHAT IS YOUR PREFERRED WORK ENVIROMENT?
			<div style="clear: both; height:40px;"></div>
			<?php
			
			$arrDivs = array(
				array(
					'val'	=> 1,
					'type'	=> 'Cosmetology',
					'img'	=> '1_1.jpg'
				),
				array(
					'val'	=> 5,
					'type'	=> 'Barbering',
					'img'	=> '1_2.jpg'
				),
				array(
					'val'	=> 9,
					'type'	=> 'Esthetics',
					'img'	=> '1_3.jpg'
				),
			);
			
			$_sele_val = '';
			$_sele_type = '';
			foreach($arrDivs as $index => $val )	{
				$new_cls = '';
				if(isset($_SESSION['sess_step2']['preferred_work_enviroment_type']) && $_SESSION['sess_step2']['preferred_work_enviroment_type'] ==$val['type']) {
					$new_cls = 'c-border-sel';
					$_sele_val = $val['val'];
					$_sele_type = $val['type'];
				}
				?>
				<div class="quizitem <?=$new_cls?>" data-val="<?=$val['val']?>" data-type="<?=$val['type']?>" style="background-image: url(../images/quiz/<?=$val['img']?>)"></div>
				<?php
			}
			?>
			<div style="clear: both; height:40px;"></div>
			
			<div class="quizbutton2">NEXT</div>
				
			<form method="post" id="idfrm2" action="step3.php">
				<input type="hidden" name="preferred_work_enviroment_val" value="<?=$_sele_val?>" class="c-preferred_work_enviroment_val" />
				<input type="hidden" name="preferred_work_enviroment_type" value="<?=$_sele_type?>" class="c-preferred_work_enviroment_type" />
				<input type="hidden" name="btn_step2" class="quizbutton2 c-opacity" value="NEXT" /> 
			</form>
			
			<div style="clear: both;"></div>
		</div>
	</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>