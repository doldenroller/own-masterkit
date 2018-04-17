<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="clearfix">
<article class="wrapper clearfix">
<h1><?= $page->title()->html() ?></h1>
<?= $page->text()->kirbytext() ?>
</article>
<!-- mit Comment -->
<!-- und noch abissl was --> 
<div>
<p>Noch etwas echten Code, das mag er glaub ich lieber hier</p>
<p>und weils so schön ist noch mehr</p>
<p>und weils so schön ist noch mehr lalala</p>
</div>
</main>
<?php snippet('footer') ?>
<?php snippet('scripts') ?>