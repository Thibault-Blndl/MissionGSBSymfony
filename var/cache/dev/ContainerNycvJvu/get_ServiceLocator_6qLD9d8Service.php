<?php

namespace ContainerNycvJvu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6qLD9d8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6qLD9d8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6qLD9d8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ficheFrais' => ['privates', '.errored..service_locator.6qLD9d8.App\\Entity\\FicheFrais', NULL, 'Cannot autowire service ".service_locator.6qLD9d8": it references class "App\\Entity\\FicheFrais" but no such service exists.'],
            'ligneFraisForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisForfaitRepository', 'getLigneFraisForfaitRepositoryService', true],
            'ligneFraisHorsForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisHorsForfaitRepository', 'getLigneFraisHorsForfaitRepositoryService', true],
        ], [
            'ficheFrais' => 'App\\Entity\\FicheFrais',
            'ligneFraisForfaitRepository' => 'App\\Repository\\LigneFraisForfaitRepository',
            'ligneFraisHorsForfaitRepository' => 'App\\Repository\\LigneFraisHorsForfaitRepository',
        ]);
    }
}
