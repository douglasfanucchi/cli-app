<?php

use MyCli\HelloWorld;
use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application();

$application->add(new HelloWorld);

$application->run();
