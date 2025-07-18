<?php

namespace ContainerW2m2Ick;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setTransactional(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        $container->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), \Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager::withSimpleDefault(($container->services['doctrine'] ?? $container->getDoctrineService())), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', #[\Closure(name: 'doctrine.migrations.container_aware_migrations_factory', class: 'Doctrine\\Bundle\\MigrationsBundle\\MigrationsFactory\\ContainerAwareMigrationFactory')] function () use ($container) {
            return ($container->privates['doctrine.migrations.container_aware_migrations_factory'] ?? $container->load('getDoctrine_Migrations_ContainerAwareMigrationsFactoryService'));
        });

        return $instance;
    }
}
