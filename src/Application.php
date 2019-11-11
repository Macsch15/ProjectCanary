<?php

namespace Canary;

use Canary\Providers\TwigProvider;

class Application
{
    /**
     * Start application
     */
    public function run()
    {
        $tempView = TwigProvider::register();

        echo $tempView->render('/frontend/index.twig');
    }
}
