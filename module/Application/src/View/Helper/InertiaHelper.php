<?php

namespace Application\View\Helper;

use Laminas\View\Helper\AbstractHelper;

class InertiaHelper extends AbstractHelper
{
    public function __invoke(string $component, array $props = [])
    {
        $data = [
            'component' => $component,
            'props' => $props,
            'url' => $_SERVER['REQUEST_URI'],
        ];

        return '<div id="app" data-page=\''.json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES).'\'></div>';
    }
}
