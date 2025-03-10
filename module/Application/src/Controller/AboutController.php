<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use LaminasInertiaJs\Model\InertiaModel;

class AboutController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new InertiaModel();

        $view->setVariables([
            'component' => 'About',
            'props' => [
                'message' => 'test msg',
            ],
            'url' => $_SERVER['REQUEST_URI'],
        ]);

        return $view;
    }
}
