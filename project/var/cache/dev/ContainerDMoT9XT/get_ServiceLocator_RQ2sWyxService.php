<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RQ2sWyx' shared service.

return $this->privates['.service_locator.RQ2sWyx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'id' => ['privates', '.errored..service_locator.RQ2sWyx.App\\Entity\\Veterinary', NULL, 'Cannot autowire service "debug.argument_resolver.not_tagged_controller.inner": it references class "App\\Entity\\Veterinary" but no such service exists.'],
], [
    'id' => 'App\\Entity\\Veterinary',
]);