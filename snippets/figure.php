<?php

/**
 * @see https://github.com/timnarr/kirby-imagex#readme
 */

if (!isset($file)) {
  // throw new Exception('Missing required $file variable');
  return;
}

$attrs ??= [];
$alt ??= $file->content()->alt();
$caption = $file->content()->caption();
$ratio   = $file->content()->ratio()->or('auto');
$critical ??= false;

$defaultOptions = [
  'image' => $file,
  'critical' => $critical,
  'formatSizeHandling' => true,
  'imgAttributes' => [
    'shared' => [
      'alt' => $alt,
    ],
  ],
];

if ($ratio->value() !== 'auto') {
  $defaultOptions['ratio'] = $ratio;
}

$noCaption ??= false;
$mergedOptions = A::merge($defaultOptions, $options ?? []);
?>
<figure <?= attr($attrs) ?>>
  <?php if ($file->extension() === 'svg' || $file->extension() === 'gif'): ?>
  <?php snippet('svg-gif-image', $mergedOptions) ?>
  <?php else: ?>
  <?php snippet('imagex-picture', $mergedOptions) ?>
  <?php endif ?>
  <?php if ($caption->isNotEmpty() && $noCaption !== true) : ?>
  <figcaption>
    <?php echo $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
