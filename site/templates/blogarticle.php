<?php snippet('header') ?>
<section class="content blogarticle">
  <h2><?php echo html($page->title()) ?></h2>
  <article class="article">
    <?php echo kirbytext($page->text()) ?>
	
	<div class="social">
		<!-- <div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="lucida grande"></div> -->
		<div class="tweet">
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="I just read a blog post:" data-via="blehnert">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div class="tweet-post">Liked what you just read? Why not <a href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php echo rawurlencode("I just read a blog post: " . $page->title() . " (via @blehnert) " . $page->tinyurl()); ?>" target="blank" title="Tweet this">tweet</a> about it or <a href="http://yourfeedlink.com" title="Subscribe to my feed" rel="alternate" type="application/rss+xml">subscribe</a> to get updates on new posts!</div>
	</div>
	
    <a href="<?php echo $articles->pagination()->nextPageURL() ?>">Next</a>
    <a href="<?php echo $articles->pagination()->prevPageURL() ?>">Previous</a>
  </article>
</section>