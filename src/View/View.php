<?php

namespace Canary\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    public function render($data)
    {
        $loader = new FilesystemLoader(appRootPath() . '/resources/view');
        $twig = new Environment($loader, [
            'cache' => false /* appRootPath() . '/cache' */
        ]);

        $twig->display($data);
    }
}
