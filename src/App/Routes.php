<?php
use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// $app->get('/', function (Request $request, Response $response, $args) {
//     $response->getBody()->write("Hello world 1!");
//     return $response;
// });

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->group('/v1', function(RouteCollectorProxy $group){
    $group->get('/persona', 'App\Controllers\PersonaController:getAll');
    $group->get('/persona/{id}', 'App\Controllers\PersonaController:get');
    $group->post('/persona', 'App\Controllers\PersonaController:add');
    $group->post('/persona/{id}', 'App\Controllers\PersonaController:edit');

    $group->get('/usuario', 'App\Controllers\UsuarioController:getAll');
    $group->get('/usuario/{id}', 'App\Controllers\UsuarioController:get');
    $group->post('/usuario', 'App\Controllers\UsuarioController:add');
    $group->post('/usuario/{id}', 'App\Controllers\UsuarioController:edit');
    $group->get('/login', 'App\Controllers\UsuarioController:login');
    $group->post('/login', 'App\Controllers\UsuarioController:login');

    $group->get('/barrio', 'App\Controllers\BarrioController:getAll');
    $group->get('/comuna', 'App\Controllers\ComunaController:getAll');
    $group->get('/puesto_votacion', 'App\Controllers\Puesto_votacionController:getAll');
    $group->get('/rol', 'App\Controllers\RolController:getAll');
});

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});
