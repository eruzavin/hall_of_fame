<?php

namespace Drupal\hall_of_fame\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class hallOfFameController extends ControllerBase
{

    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function hallOfFameView()
    {
        return [
            '#markup' => 'доска почета',
        ];
    }

}