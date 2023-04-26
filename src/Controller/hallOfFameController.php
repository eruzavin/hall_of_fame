<?php

namespace Drupal\hall_of_fame\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\Renderer;

/**
 * Provides route responses for the Example module.
 */
class hallOfFameController extends ControllerBase
{
    /**
     * @var Renderer
     */
    protected $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('renderer')
        );
    }
    
    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function hallOfFameView()
    {
        $content = [];
        $view = views_embed_view('awarded', 'page_1');
        $content['#markup'] = $this->renderer->render($view);

        return $view;
    }
}
