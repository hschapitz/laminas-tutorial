<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Http\Header\GenericHeader;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new ViewModel();
        /** @var ?GenericHeader $inertiaHeader */
        $inertiaHeader = $this->getRequest()->getHeaders()->get('X-Inertia');
        if ($inertiaHeader instanceof GenericHeader && $inertiaHeader->getFieldValue() == 'true') {
            $this->getResponse()->getHeaders()->addHeader(new GenericHeader('X-Inertia', true));

            $view = new JsonModel();
            $view->setTerminal(true);
        }


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
