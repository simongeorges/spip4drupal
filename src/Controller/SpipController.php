<?php

namespace Drupal\spip4drupal\Controller;

use Drupal\Core\Controller\ControllerBase;

class SpipController extends ControllerBase {

  function dashboard() {
    return $this->redirect('system.admin_content');
  }

}
