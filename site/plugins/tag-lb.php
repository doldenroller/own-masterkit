<?php

kirbytext::$tags['lb'] = array(
  'attr' => array(
    'text'
  ),
  'html' => function($tag) {

    $text    = $tag->attr('text');

    return '&shy;';

  }
);