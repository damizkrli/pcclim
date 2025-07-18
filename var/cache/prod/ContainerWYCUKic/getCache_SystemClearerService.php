<?php

namespace ContainerWYCUKic;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_SystemClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->load('getCache_ValidatorService')), 'cache.serializer' => ($container->privates['cache.serializer'] ?? $container->load('getCache_SerializerService')), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->load('getCache_PropertyInfoService')), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? $container->load('getDoctrine_SystemCachePoolService')), 'cache.property_access' => ($container->privates['cache.property_access'] ?? $container->load('getCache_PropertyAccessService')), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->load('getCache_SecurityExpressionLanguageService')), 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? $container->getCache_SecurityIsGrantedAttributeExpressionLanguageService())]);
    }
}
