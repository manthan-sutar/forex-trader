<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require('helpers/constants.php');

require 'vendor/autoload.php';


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$container = new \Slim\Container($configuration);

$app = new \Slim\App($container);

require 'src/routes.php';

$app->run();

