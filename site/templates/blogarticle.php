<?php snippet('header') ?>
<section class="content blogarticle post">
  <h2><?php echo html($page->title()) ?></h2>
  <article class="article">
    <?php echo kirbytext($page->text()) ?>

    <a href="<?php echo $articles->pagination()->nextPageURL() ?>">Next</a>
    <a href="<?php echo $articles->pagination()->prevPageURL() ?>">Previous</a>

  </article>
</section>

