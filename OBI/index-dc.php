<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>O'Briens Aveda Institute | So. Burlington, VT</title>
<meta name="description" content="O'Briens Aveda Institute prepares its students to graduate from its institution to become successful professionals in the fields of cosmetology, barbering,and spa therapy.The O'Briens have been in the cosmetology business for over 60 years. Starting in the early 1950's, they were the first to open first floor locations next to high-end retail stores, developing new concepts such as `no appointment necessary' walk-in services. At that time the cosmetology business was in a state of expansion and there was need for young skilled stylists." />
<meta name="keywords" content="aveda, cosmetology, beauty salon vermont, aveda, avada, esthiology, cosmetology classes vermont, esthiology classes Burlington, aveda Burlington, cosmetology Burlington, aveda institute, Vermont Beauty School, Burlington Beauty School, Aveda Beauty School" />

<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/media_s.css">
<link rel="stylesheet" href="royalslider/royalslider.css">
<link rel="stylesheet" href="royalslider/skins/default/rs-default.css">
<script src='royalslider/jquery-1.8.3.min.js'></script>
<script src="royalslider/jquery.royalslider.min.js"></script>
<script src="js/mobile_number_script.js"></script>
<link rel="stylesheet" href="css/custom_video_slider.css"><!-- vedio slider and popup css -->

</head>

<body>
<?php include 'includes/header.php';?>
<?php include 'includes/billboard.php';?>
	<!-- video open in this popup  -->
	<div class="c-popup  c-display-none">
		<span class="c-close" title="Close">X</span>
		<div class="c-video-div">
			<iframe class="c-iframe" width="100%" height="340"
			src="">
			</iframe>
		</div>
	</div>


<div class="greenbar">OUR PROGRAMS</div>
<div class="programs">
<div class="wrapper">
		 <?php foreach ($programsRecords as $record): ?>
<div class="programbox">

	<div class="programimg" <?php foreach ($record['program_image'] as $index => $upload): ?>style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>)"<?php endforeach ?>></div>

	<div style="clear: both;"></div> 
	<h3><?php echo htmlencode($record['title']) ?></h3>
<p>

<?php echo htmlencode($record['summary']) ?></p>
    <p><a href="<?php echo $record['_link'] ?>"><img src="images/arrow2.png" width="50" height="51" alt=""/></a></p>
</div>
 <?php endforeach ?>
<div style="clear: both;"></div> 
</div>
</div>
	<?php
	$arrVideos = array(
		array(
			'title'		=> 'THE AVEDA DIFFERENCE',
			'video'		=> 'OBriens+Aveda+Institute+Promo+v3+HD.mp4',
			'bgimg'		=> 'obi_video.png'
		),
		array(
			'title'		=> 'THE AVEDA DIFFERENCE 2',
			'video'		=> 'OBriens+Aveda+Institute+Promo+v3+HD.mp4',
			'bgimg'		=> 'obi_video.png'
		),
		array(
			'title'		=> 'THE AVEDA DIFFERENCE 3',
			'video'		=> 'OBriens+Aveda+Institute+Promo+v3+HD.mp4',
			'bgimg'		=> 'obi_video.png'
		)
	);
	?>
	<div class="slideshow-container">
		<?php
		if(isset($arrVideos) && is_array($arrVideos) && count($arrVideos))	{
			foreach($arrVideos as $index => $val )	{
				?>
				<div class="videobox mySlides fade" style="background-image: url(images/<?=$val['bgimg']?>);">
					<?=$val['title']?>
					<div class="watchvideo">
						<img src="images/play.png" data-src="<?=$val['video']?>" class="c-play-video" width="80" height="80" alt=""/><p>Watch Video</p>
					</div>
				</div>
				<?php
			}
		}
		?>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<!-- The dots/circles -->
	<div style="text-align:center">
		<?php
		if(isset($arrVideos) && is_array($arrVideos) && count($arrVideos))	{
			for($i = 1; $i <= count($arrVideos); $i++) {
				?>
				<span class="dot" onclick="currentSlide(<?=$i?>)"></span> 
				<?php
			}
		}
		?>
	</div>

<?php include 'includes/social.php';?>
<?php include 'includes/quiz.php';?>
<?php include 'includes/footer.php';?>
<script src="js/custom_video_slider.js"></script>
</body>
</html>