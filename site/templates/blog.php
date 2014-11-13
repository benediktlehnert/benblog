<?php snippet('header') ?>

<section class="content blog">

  <?php $articles = $page->children()->visible()->flip()->paginate(5) ?>

  <?php foreach($articles as $article): ?>

  <article class="post">
    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <p><?php echo excerpt($article->text(), 400) ?> <a class="readmore" href="<?php echo $article->url() ?>">→</a></p>
  </article>

  <?php endforeach ?>

  <?php if($articles->pagination()->hasPages()): ?>
  <nav class="pagination">

    <?php if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
    <?php endif ?>
    <?php if($articles->pagination()->hasPrevPage()): ?>
    <span style="font-style: normal; margin: 0 7px 0 10px;">·</span>
    <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
    <?php endif ?>

  </nav>
  <?php endif ?>

</section>

