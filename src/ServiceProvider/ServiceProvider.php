<?php

namespace Canary\ServiceProvider;

use Canary\Exceptions\Exception;

class ServiceProvider
{
    public function get($service)
    {
        $services = config('providers');

        if (isset($services[$service]) === false) {
            throw new Exception('Service "' . $service . '" not found');
        }

        if (class_exists($services[$service]) === false) {
            throw new Exception('Class "' . $services[$service] . '" not exists');
        }

        return new $services[$service];
    }
}
