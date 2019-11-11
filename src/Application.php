<?php

namespace Canary;

use Canary\ServiceProvider\ServiceProvider;

class Application
{
    /**
     * Start application
     */
    public function run()
    {
        $tempView = new ServiceProvider();
        $tempView = $tempView->get('View');

        $tempView->render('/frontend/index.twig');
    }
}
