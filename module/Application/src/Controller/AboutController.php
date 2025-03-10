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
            'message' => 'test msg',
        ]);

        return $view;
    }
}
