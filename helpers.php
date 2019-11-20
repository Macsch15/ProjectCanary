<?php

use Canary\Config\Config;

if (!function_exists('config')) {
    function config($section, $key = null)
    {
        $config = new Config();

        return $config->get($section, $key);
    }
}

if (!function_exists('appRootPath')) {
    function appRootPath()
    {
        return __DIR__;
    }
}

if (!function_exists('getAppEnv')) {
    function getAppEnv()
    {
        return config('app', 'env');
    }
}

if (!function_exists('inDev')) {
    function inDev()
    {
        $devEnv = ['dev', 'local', 'development'];

        return in_array(getAppEnv(), $devEnv, true) === true;
    }
}

if (!function_exists('stopwatch')) {
    function stopwatch($callback, $times = 1)
    {
        $totalTime = 0;

        foreach (range(1, $times) as $time) {
            $start = microtime(true);

            $callback();

            $totalTime += microtime(true) - $start;
        }

        return $totalTime / $times;
    }
}
