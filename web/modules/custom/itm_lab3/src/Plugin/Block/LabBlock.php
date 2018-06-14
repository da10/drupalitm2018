<?php

namespace Drupal\itm_lab3\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'LabBlock' block.
 *
 * @Block(
 *  id = "lab_block",
 *  admin_label = @Translation("Lab block"),
 * )
 */
class LabBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
public function build() {
    $build = [];
    $build['information_time_block']['#markup'] = format_date(\Drupal::time()->getRequestTime(), 'long');

    return $build;
  }

  function format_date($timestamp, $type) {
  return \Drupal::service('date.formatter')->format($timestamp, $type);
  }

}
