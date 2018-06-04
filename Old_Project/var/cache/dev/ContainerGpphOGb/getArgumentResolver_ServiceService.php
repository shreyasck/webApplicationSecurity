<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\BasketController:getBasket' => function () {
    return ($this->privates['service_locator.dTz98No'] ?? $this->load(__DIR__.'/getServiceLocator_DTz98NoService.php'));
}, 'App\\Controller\\CustomerController:index' => function () {
    return ($this->privates['service_locator.mXG07VD'] ?? $this->load(__DIR__.'/getServiceLocator_MXG07VDService.php'));
}, 'App\\Controller\\LoginController:getLogin' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\LoginController:postLogin' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\LoginController:postLogout' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\ProductController:getProducts' => function () {
    return ($this->privates['service_locator.YBnh13H'] ?? $this->load(__DIR__.'/getServiceLocator_YBnh13HService.php'));
}, 'App\\Controller\\BasketController::getBasket' => function () {
    return ($this->privates['service_locator.dTz98No'] ?? $this->load(__DIR__.'/getServiceLocator_DTz98NoService.php'));
}, 'App\\Controller\\CustomerController::index' => function () {
    return ($this->privates['service_locator.mXG07VD'] ?? $this->load(__DIR__.'/getServiceLocator_MXG07VDService.php'));
}, 'App\\Controller\\LoginController::getLogin' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\LoginController::postLogin' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\LoginController::postLogout' => function () {
    return ($this->privates['service_locator.qyrTpo9'] ?? $this->load(__DIR__.'/getServiceLocator_QyrTpo9Service.php'));
}, 'App\\Controller\\ProductController::getProducts' => function () {
    return ($this->privates['service_locator.YBnh13H'] ?? $this->load(__DIR__.'/getServiceLocator_YBnh13HService.php'));
})));