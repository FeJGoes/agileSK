<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Controllers\LoginController;


require './composer/vendor/autoload.php';

// Instantiate app
$app = AppFactory::create();
$app->setBasePath('/api');

// Add Error Handling Middleware
$app->addErrorMiddleware(true, false, false);

// Add route callbacks
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write('');
    return $response
                ->withHeader('Location', './login/123456/teste@mail.com')
                ->withStatus(302);
});

$app->get('/login/{senha:[0-9]+}/{email}', function (Request $request, Response $response, $args) {
    $Login = new LoginController ($args['email'], $args['senha']);
    $resposta = $Login->possoEntrar();
    $resposta = json_encode($resposta);

    $response->getBody()->write($resposta);
    return $response
                 ->withHeader('Content-Type', 'application/json');            
});
// Run application
$app->run();
