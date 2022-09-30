<?php

namespace ContainerUxZlhlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P0oKA42Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p0oKA42' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p0oKA42'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'atelier' => ['privates', '.errored..service_locator.p0oKA42.App\\Entity\\Ateliers', NULL, 'Cannot autowire service ".service_locator.p0oKA42": it references class "App\\Entity\\Ateliers" but no such service exists.'],
            'ateliersRepository' => ['privates', 'App\\Repository\\AteliersRepository', 'getAteliersRepositoryService', true],
        ], [
            'atelier' => 'App\\Entity\\Ateliers',
            'ateliersRepository' => 'App\\Repository\\AteliersRepository',
        ]);
    }
}