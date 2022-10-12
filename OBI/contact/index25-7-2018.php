<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us | O'Briens Aveda Institute | So. Burlington, VT</title>
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
<div class="royalSlider rsDefault">
    

  <div style="position: relative">
    <div class="billboardtext2">CONTACT US
    <div class="billboardsubtext">SUB TEXT GOES HERE</div>
    </div>
    <img class="rsImg" src="../images/billboard.jpg" />
    </div>



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
We would love to hear from you!<br>
Please feel free to contact us anytime by phone, social media, or e-mail. </div></div>
<div class="programssub">
<div class="wrapper">
	<div class="toolbox">
		<div class="toolboxheader"><img src="../images/arrowsgreen.png" width="25" height="24" alt="" style="vertical-align: middle"/> TOOLBOX</div>
	  <div class="toolboxitem">TOOLBOX</div>
		<div class="toolboxitem">TOOLBOX</div>
		<div class="toolboxitem">TOOLBOX</div>
		<div class="toolboxitem">TOOLBOX</div>
		
	</div>
 <form id="requestinfoform" class="form" action="" method="post">

  


<div class="formfield"><label class="contactform" for="firstname">First Name*<span class="error"></span></label><br />
<input id="firstname" name="firstname:required" type="text" value="" class="textfield1" /></div>

<div class="formfield">
<label class="contactform" for="lastname">Last Name*<span class="error"></span></label><br />
<input id="lastname" name="lastname:required" type="text" value="" class="textfield1" /></div>

<div class="formfield">
<label class="contactform" for="phone">Phone Number*<span class="error"></span></label><br />
<input id="phone" name="phone:required" type="text" value="" class="textfield1"/></div>

<div class="formfield">
<label class="contactform" for="email">Email*<span class="error"></span></label><br />
<input id="email" name="email:email:required" type="text" value="" class="textfield1"/></div>


    <div class="formfield2">
      <input type="submit" value="Submit" id="submit" class="formbutton" /> <br /> <em>*Required field</em></div>

</form>
  <div style="clear: both;"></div> 
</div>
</div>


<?php include '../includes/social2.php';?>
<?php include '../includes/quiz.php';?>
<?php include '../includes/footer.php';?>

</body>
</html>