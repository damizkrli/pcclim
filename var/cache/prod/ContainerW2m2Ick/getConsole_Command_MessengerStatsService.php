<?php

namespace ContainerW2m2Ick;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerStatsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_stats' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StatsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_stats'] = $instance = new \Symfony\Component\Messenger\Command\StatsCommand(($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), [0 => 'async', 1 => 'failed']);

        $instance->setName('messenger:stats');
        $instance->setDescription('Show the message count for one or more transports');

        return $instance;
    }
}
