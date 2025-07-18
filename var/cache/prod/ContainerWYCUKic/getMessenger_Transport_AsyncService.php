<?php

namespace ContainerWYCUKic;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_AsyncService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.transport.async' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'));

        if (isset($container->privates['messenger.transport.async'])) {
            return $container->privates['messenger.transport.async'];
        }

        return $container->privates['messenger.transport.async'] = $a->createTransport($container->getEnv('MESSENGER_TRANSPORT_DSN'), ['use_notify' => true, 'check_delayed_interval' => 60000, 'transport_name' => 'async'], ($container->privates['messenger.transport.native_php_serializer'] ??= new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer()));
    }
}
