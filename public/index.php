<?php

require '../vendor/autoload.php';

use Canary\Kernel;
use Canary\Application;

$kernel = new Kernel();
$application = new Application();
$application->run();
