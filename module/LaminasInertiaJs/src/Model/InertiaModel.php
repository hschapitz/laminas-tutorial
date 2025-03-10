<?php

namespace LaminasInertiaJs\Model;

use Laminas\View\Model\ViewModel;

class InertiaModel extends ViewModel
{
    public function terminate(): bool
    {
       // not a nice solution
       $headers = getallheaders();
       if (isset($headers['X-Inertia']) && $headers['X-Inertia'] === 'true') {
           return true;
       }

       return false;
    }

    public function getVariables(): array
    {
        $variables = parent::getVariables();

        return [
            'component' => $this->template,
            'props' => (array) $variables,
            'url' => $_SERVER['REQUEST_URI']
        ];
    }
}