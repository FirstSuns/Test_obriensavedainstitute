<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsAdmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home1/s2smedia/public_html/sites/OBI/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

// load record from 'programs_overview'
  list($blogRecords, $blogMetaData) = getRecords(array(
    'tableName'   => 'blog',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  $blogRecord = @$blogRecords[0]; 

?>
<rss version="2.0">
	<channel>
		<title>O'Briens Aveda Institute</title>
		<link>http://obi.sight2sitemedia.net</link>
		<description>O'Briens Aveda Institute prepares its students to graduate from its institution to become successful professionals in the fields of cosmetology, barbering,and spa therapy.The O'Briens have been in the cosmetology business for over 60 years. Starting in the early 1950's, they were the first to open first floor locations next to high-end retail stores, developing new concepts such as `no appointment necessary' walk-in services. At that time the cosmetology business was in a state of expansion and there was need for young skilled stylists.</description>
		<language>en-us</language>
		<copyright><?php echo date('Y'); ?> O'Briens Aveda Institute</copyright>
		<pubDate><?php echo date('r'); ?></pubDate> 	
		<category>Cosmetology, Barbering and Estetics</category>
		<generator>S2Shout!</generator>
        <image>
			<url>http://obi.sight2sitemedia.net/images/logo.png</url>
			<title>O'Briens Aveda Institute</title>
			<link>http://obi.sight2sitemedia.net</link>
			<height>351</height>
			<width>80</width>
			<description>O'Briens Aveda Institute prepares its students to graduate from its institution to become successful professionals in the fields of cosmetology, barbering,and spa therapy.The O'Briens have been in the cosmetology business for over 60 years. Starting in the early 1950's, they were the first to open first floor locations next to high-end retail stores, developing new concepts such as `no appointment necessary' walk-in services. At that time the cosmetology business was in a state of expansion and there was need for young skilled stylists.</description>
		</image>
     
   <?php foreach ($blogRecords as $record): ?>
		<item>
			<title><![CDATA[<?php echo htmlencode($record['title']) ?>]]></title>
			<link>http://obi.sight2sitemedia.net<?php echo $record['_link'] ?></link>
			<description><?php echo htmlencode($record['blurb']) ?></description>
			<pubDate><?php echo date("F j, Y", strtotime($record['createdDate'])) ?></pubDate>
			<source url="http://obi.sight2sitemedia.net<?php echo $record['_link'] ?>">O'Briens Aveda Institute</source>
         <?php foreach ($record['image'] as $index => $upload): ?>
            <enclosure url='http://obi.sight2sitemedia.net<?php echo str_replace('&','&amp;',$upload['urlPath']) ?>' length='<?php echo filesize($upload['filePath']) ?>' type='image/jpeg' />
            <?php endforeach ?>
		</item>
         <?php endforeach ?>
	</channel>
</rss>