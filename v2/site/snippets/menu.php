<nav class="navigation clearfix" id="main-nav" role="navigation">
<div class="wrapper clearfix">
<a href="#" id="pull">
<div class="burger-wrap">
<div class="burger"></div>
</div>
</a>
<ul class="menu clearfix">
<?php foreach($pages->visible() as $item): ?>
<li class="menu-item<?= r($item->isOpen(), ' active') ?>">
<a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
</li>
<?php endforeach ?>
</ul>
</div>
</nav>