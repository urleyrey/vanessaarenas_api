<?php

use \DI\Container;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';


// Instantiate app
$aux = new \DI\Container();
AppFactory::setContainer($aux);
$app = AppFactory::create();
$container = $app->getContainer();

require __DIR__ . "/Configs.php";
require __DIR__ . "/Dependencies.php";
require __DIR__ . "/Routes.php";
require __DIR__ . "/Services.php";
require __DIR__ . "/Models.php";

$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

try {
    $app->run();     
} catch (Exception $e) {    
  // We display a error message
  die( json_encode(array("status" => "failed", "message" => "This action is not allowed"))); 
}