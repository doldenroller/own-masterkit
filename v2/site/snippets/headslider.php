<?php if($page->slideroff()->bool()): ?>
<?php elseif($page->slider() != '' || $pages->find('hauptslider')): ?>

<section class="headslider clearfix">

<?php if($page->sliderpage() != ''): ?>
<?php $slidepage = $page->sliderpage()->html();
$imgsrc = $page->find($slidepage) ?>
<?php else: ?>
<?php $imgsrc = $pages->find('hauptslider') ?>
<?php endif // headslider source ?>

<?php snippet('images', ['imgsrc' => $imgsrc, 'minratio' => 0, 'maxratio' => 2]) ?>

</section>
<?php endif // headslider exists somewhere ?>