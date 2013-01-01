<?php

$articles = $pages->find('blog')->children()->visible()->flip()->limit(5);

snippet('feed', array(
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionField'  => 'text',
  'descriptionLength' => 300
));

?>