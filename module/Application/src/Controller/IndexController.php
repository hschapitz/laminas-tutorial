<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use LaminasInertiaJs\Model\InertiaModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new InertiaModel();


        $view->setVariables([
            'component' => 'Home',
            'props' => [
                'message' => 'Welcome',
            ],
            'url' => $_SERVER['REQUEST_URI'],
        ]);

        return $view;
    }
}
