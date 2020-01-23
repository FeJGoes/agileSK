<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require './composer/vendor/autoload.php';

// Instantiate app
$app = AppFactory::create();
$app->setBasePath('/api');
// Add Error Handling Middleware
$app->addErrorMiddleware(true, false, false);

// Add route callbacks
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/home', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Home");
    return $response;
});
// Run application
$app->run();
