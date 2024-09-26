<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');
?>
<figure <?php echo Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
  <ul class="gallery">
    <?php foreach ($block->images()->toFiles() as $image) : ?>
    <li class="gallery__item">
      <?php
      snippet('figure', [
        'file' => $image,
        'options' => [
          'imgAttributes' => [
            'shared' => [
            ],
          ]
        ],
      ]);
      ?>
    </li>
    <?php endforeach ?>
  </ul>
  <?php if ($caption->isNotEmpty()) : ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
