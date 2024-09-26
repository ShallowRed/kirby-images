<div class="carousel"<?php attr(['data-ratio' => $ratio, 'data-crop' => $crop ? 'true' : 'false', 'data-autoplay' => ($autoplay ?? false) ? 'true' : 'false', 'data-interval' => $interval ?? 5000], null, ' ') ?>>
  <div class="carousel-inner">
    <?php foreach ($images as $index => $image) : ?>
    <div class="carousel-item<?php echo $index === 0 ? ' active' : '' ?>">
      <?php
      snippet('figure', [
        'file' => $image,
        'options' => A::merge([
          'imgAttributes' => [
            'shared' => [],
          ]
        ], $ratio == 'auto' ? [] : ['ratio' => $ratio]),
      ]);
      ?>
    </div>
    <?php endforeach ?>
  </div>
  <?php if (!empty($caption)) : ?>
  <div class="carousel-caption">
    <?php echo $caption ?>
  </div>
  <?php endif ?>
  <a class="carousel-control-prev" role="button" aria-label="Image précédente">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" role="button" aria-label="Image suivante">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
