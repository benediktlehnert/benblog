<?php snippet('header') ?>
<!-- <?php snippet('menu') ?>
<?php snippet('submenu') ?> -->

<section class="content">
	<div style="text-align: center; margin-bottom: 20px;">
		<img class="about" src="../assets/images/ben_profile.jpg" alt="" />
	</div>
  	<article>
    	<!--<h1><?php echo html($page->title()) ?></h1>-->
    	<?php echo kirbytext($page->text()) ?>
  	</article>
  	<div class="contact">
  		This site even has a <a href="http://www.benedikt-lehnert.de/imprint">legal notice</a>.
  		<!--<ul>
  			<li><a href="http://www.twitter.com/blehnert">&#62217;</a></li>
  			<li><a href="http://instagram.com/blehnert">&#62253;</a></li>
  			<li><a href="http://facebook.com/benediktlehnert">&#62222;</a></li>
  			<li><a href="http://de.linkedin.com/in/benediktlehnert/en">&#62233;</a></li>
  			<li><a href="http://dribbble.com/ben.">&#62235;</a></li>
			<li><a href="mailto:blehnert@me.com">&#128319;</a></li> 			
  		</ul>--> 
  	</div>

</section>

<!-- <?php snippet('footer') ?> -->