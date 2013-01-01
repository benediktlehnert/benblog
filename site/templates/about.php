<?php snippet('header') ?>
<!-- <?php snippet('menu') ?>
<?php snippet('submenu') ?> -->

<section class="content">
	<img src="assets/images/ben_profile.jpg" alt="" />
  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<!-- <?php snippet('footer') ?> -->