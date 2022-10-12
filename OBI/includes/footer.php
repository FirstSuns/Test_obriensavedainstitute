<div class="footer">
<div class="wrapper">
	<ul><li class="footertitle">AVEDA DIFFERENCE</li>
 <?php foreach ($aveda_difference_pagesRecords as $record): ?>
<li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
<?php endforeach ?></ul>
	<ul>
	<li class="footertitle">PROGRAMS</li>
<?php foreach ($programsRecords as $record): ?>
	<li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
	 <?php endforeach ?>
</ul>
	<ul>
	<li class="footertitle">ADMISSIONS</li>
<li><a href="../apply">Apply Now</a></li>
<li><a href="../tour">Schedule Tour</a></li>

<?php foreach ($admissions_pagesRecords as $record): ?>
<li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>


	 
		<?php endforeach ?>
	</ul>
	<ul>
	<li class="footertitle">GUEST SERVICES</li>
<?php foreach ($services_listRecords as $record): ?>
	<li><a href="../services/#<?php echo htmlencode($record['title']) ?>"><?php echo htmlencode($record['title']) ?></a></li>
<?php endforeach ?></ul>
	<ul>
	<li class="footertitle">ABOUT US</li>
<?php foreach ($about_us_pagesRecords as $record): ?>
	<li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
	<?php endforeach ?>
<li><a href="../blog">Blog</a></li>
</ul>
	<div style="clear: both;"></div><img src="../images/accredidation.jpg" width="148" height="58" alt="" />
	<div class="copyright">©<?php echo date("Y"); ?> O’Briens Aveda Institute, All rights reserved.  <a href="../privacy">Privacy Policy</a> | <a href="#">Sitemap</a></div><div style="clear: both;"></div>
    </div>
</div>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b9fff54c9abba579677a0c3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->