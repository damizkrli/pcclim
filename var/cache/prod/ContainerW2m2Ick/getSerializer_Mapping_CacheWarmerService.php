<?php

namespace ContainerW2m2Ick;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_CacheWarmerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()))], ($container->targetDir.''.'/serialization.php'));
    }
}
