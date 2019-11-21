<?php

namespace Canary;

use Canary\ServiceProvider\ServiceProvider;
use function Sentry\init as sentry;

class Application
{
    /**
     * Start application
     */
    public function run()
    {
        $this->initSentry();

        $tempView = new ServiceProvider();
        $tempView = $tempView->get('View');

        $tempView->render('/frontend/index.twig');
    }

    /**
     * Init Sentry
     */
    private function initSentry()
    {
        sentry(['dsn' => config('app', 'sentry_dsn')]);
    }
}
