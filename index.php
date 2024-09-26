<?php

Kirby::plugin('shallowred/images', [

  'blueprints' => [
    'blocks/image' => __DIR__ . '/blueprints/blocks/image.yml',
    'blocks/carousel' => __DIR__ . '/blueprints/blocks/carousel.yml',
    'files/image' => __DIR__ . '/blueprints/files/image.yml',
    'fields/image' => __DIR__ . '/blueprints/fields/image.yml',
  ],

  'snippets' => [
    'figure' => __DIR__ . '/snippets/figure.php',
    'blocks/image' => __DIR__ . '/snippets/blocks/image.php',
    'blocks/gallery' => __DIR__ . '/snippets/blocks/gallery.php',
    'carousel' => __DIR__ . '/snippets/carousel.php',
    'blocks/carousel' => __DIR__ . '/snippets/blocks/carousel.php',
    'svg-gif-image' => __DIR__ . '/snippets/svg-gif-image.php',
  ],
]);
