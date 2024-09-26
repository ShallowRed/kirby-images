<?php

snippet('figure', [
  'file' => $block->image()->toFile(),
  'critical' => $block->critical()->toBool(),
]);
