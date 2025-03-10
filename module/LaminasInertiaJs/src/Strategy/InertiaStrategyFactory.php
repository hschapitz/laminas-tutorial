<?php

namespace LaminasInertiaJs\Strategy;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class InertiaStrategyFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $jsonStrategy = new InertiaStrategy(
            $container->get('ViewJsonRenderer'),
            $container->get('ViewPhpRenderer')
        );
        return $jsonStrategy;
    }
}