<?php

namespace Container3t3MEIP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllercreateUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.43tWQYB.App\Controller\UserController::createUser()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.43tWQYB.App\\Controller\\UserController::createUser()'] = ($container->privates['.service_locator.43tWQYB'] ?? $container->load('get_ServiceLocator_43tWQYBService'))->withContext('App\\Controller\\UserController::createUser()', $container);
    }
}
