<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- for Facebook -->          
  <meta property="og:title" content="<?php echo html($site->title()) ?>" />
  <meta property="og:url" content="<?php echo url() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://www.benedikt-lehnert.de/assets/images/ben_profile.jpg" />
  <meta property="og:description" content="">

  <link href="assets/favicon.ico" rel="shortcut icon">
   <link href="favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="<?php echo html($pages->find('blog/feed')->title()) ?>" />
  
  <script type="text/javascript" src="//use.typekit.net/rhv1myx.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  <div class="color"></div>
	<div class="container">
		<h1 class="logo"><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
		<div class="nav"><h1><a href="http://feeds.feedburner.com/blehnert/benblog" title="Subscribe to my feed" rel="alternate" type="application/rss+xml">→ Subscribe</a></h1></div>
		<div class="nav"><h1><a href="http://www.benedikt-lehnert.de/about">→ About</a></h1></div>
