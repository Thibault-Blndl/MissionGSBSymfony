<?php

namespace ContainerNycvJvu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9NPWjJJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9NPWjJJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9NPWjJJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tokenStorage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'tokenStorage' => '?',
        ]);
    }
}