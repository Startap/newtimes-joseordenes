<?php

require __DIR__ . '/vendor/autoload.php';

use Components\Application;
use Components\Renderer;
use Components\Router;
use Symfony\Component\Dotenv\Dotenv;

$environmentFile = __DIR__ . '/.env';
if (file_exists($environmentFile)) {
    $environmentSettings = new Dotenv();
    $environmentSettings->loadEnv();
} else {
    die('Failed attempt to read .env file. Please create a one and fill all environment variables.');
}

$app = new Application();
$app->bootstrapApplication();
$app->processRequestedUri();
