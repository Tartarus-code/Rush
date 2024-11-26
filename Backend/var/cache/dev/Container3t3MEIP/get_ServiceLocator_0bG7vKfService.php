<?php

namespace Container3t3MEIP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0bG7vKfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0bG7vKf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0bG7vKf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repoStatus' => ['privates', 'App\\Repository\\StatusRepository', 'getStatusRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'repoStatus' => 'App\\Repository\\StatusRepository',
            'manager' => '?',
        ]);
    }
}
