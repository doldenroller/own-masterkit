<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="clearfix">
<article class="wrapper clearfix">
<h1><?= $page->title()->html() ?></h1>
<?= $page->text()->kirbytext() ?>
</article>
</main>
<?php snippet('footer') ?>
<?php snippet('scripts') ?>