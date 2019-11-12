<?php

namespace Canary\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    /**
     * Render view
     *
     * @param $template
     * @param array $variables
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function render($template, array $variables = []) : void
    {
        $loader = new FilesystemLoader(appRootPath() . '/resources/view');
        $twig = new Environment($loader, [
            'cache' => (inDev() === true ? false : appRootPath() . '/' . config('app', 'cache_path')),
            'debug' => inDev() === true,
            'strict_variables' => inDev() === true
        ]);

        $twig->display($template, $variables);
    }
}
