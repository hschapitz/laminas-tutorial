<?php

namespace LaminasInertiaJs;

use LaminasInertiaJs\Strategy\InertiaStrategy;
use LaminasInertiaJs\Strategy\InertiaStrategyFactory;

return [
    'service_manager' => [
        'factories' => [
            InertiaStrategy::class => InertiaStrategyFactory::class,
        ],
    ],
    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
            InertiaStrategy::class
        ],
    ],
];