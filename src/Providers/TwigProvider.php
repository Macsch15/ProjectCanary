<?php

namespace Canary\Providers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class TwigProvider
{
    /**
     * Register provider
     */
    public static function register()
    {
        $loader = new FilesystemLoader(appRootPath() . '/resources/view');

        return new Environment($loader, [
            'cache' => false /* appRootPath() . '/cache' */
        ]);
    }
}
