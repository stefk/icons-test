<?php

require_once __DIR__.'/vendor/autoload.php';

$lipsum = new joshtronic\LoremIpsum();

$icons = array_map(function ($icon) use ($lipsum) {
  return [
    'path' => 'icons/'.basename($icon),
    'title' => ucfirst($lipsum->words(rand(1, 2))),
    'desc' => $lipsum->sentence(),
    'question' => ucfirst($lipsum->words(rand(5, 10))).' ?'
  ];
}, glob(__DIR__.'/icons/*.svg'));

include __DIR__.'/template.php';
