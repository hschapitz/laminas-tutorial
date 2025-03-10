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
}