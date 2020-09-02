<?php

use Symfony\Component\Console\Application;

require __DIR__ . '/vendor/autoload.php';

$kernel = new  App\AppKernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$application = $container->get(Application::class);
$application->run();
