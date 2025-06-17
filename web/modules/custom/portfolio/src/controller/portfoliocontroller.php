<?php

namespace Drupal\portfolio\Controller;

use Drupal\Core\Controller\ControllerBase;

class PortfolioController extends ControllerBase {
  public function list() {
    $build = [
      '#markup' => '<h2>My Portfolio</h2><p>This is a custom portfolio page.</p>',
    ];
    return $build;
  }
}