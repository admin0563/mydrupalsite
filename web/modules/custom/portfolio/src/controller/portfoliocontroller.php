<?php

namespace Drupal\portfolio\Controller;

use Drupal\Core\Controller\ControllerBase;

class PortfolioController extends ControllerBase {
  public function portfolioPage() {
    return [
      '#markup' => $this->t('Welcome to the Portfolio page!'),
    ];
  }
}