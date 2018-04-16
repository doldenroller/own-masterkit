<?php

kirbytext::$tags['tel'] = array(
  'attr' => array(
    'text',
	'class',
	'title'
  ),
  'html' => function($tag) {

    $article = $tag->attr('tel');
	$class   = $tag->attr('class');
	$text   = $tag->attr('text', $article);
	$title   = $tag->attr('title', 'Rufen Sie uns an');

    return '<a href="tel:' . $article . '" class="phone ' . $class . '" title="' . $title . '">' . $text . '</a>';

  }
);