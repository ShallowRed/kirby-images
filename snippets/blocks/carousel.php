<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->content()->caption()->value();
$crop    = $block->content()->crop()->isTrue();
$ratio   = $block->content()->ratio()->or('auto')->value();

// Carousel specific attributes
$autoplay = $block->content()->autoplay()->isTrue();
$interval = $block->content()->interval()->or('5000')->value();
$images   = $block->content()->images()->toFiles();

snippet('carousel', compact('images', 'caption', 'crop', 'ratio', 'autoplay', 'interval'));
?>
