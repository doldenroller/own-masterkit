<?php foreach($imgsrc->imgentries()->toStructure() as $imgentry): ?>

<div class="slide">
<?php $img = $imgentry->img()->toFile() ?>
<figure class="<?php snippet('image-ratio', ['img' => $img, 'minratio' => $minratio, 'maxratio' => $maxratio]) ?> clearfix">
<img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>">
<?php if($imgentry->caption() != '' || $imgentry->link() != ''): ?>
<figcaption>
<?= $imgentry->caption()->kirbytext() ?>
<?php if($imgentry->link() != ''): ?>
<a href="<?= $imgentry->link()->html() ?>"<?php e($imgentry->newtab()->bool(), ' target="_blank"') ?>>
<?= $imgentry->linktext()->html() ?>
</a>
<?php endif //link ?>
</figcaption>
<?php endif //caption ?>

</figure>
</div>
<?php endforeach ?>
