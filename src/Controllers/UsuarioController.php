<?php namespace App\Controllers;

use App\Controllers\BaseController;
use Psr\Container\ContainerInterface;

class UsuarioController extends BaseController{

public function getAll($request, $response, $args){
    $payload = $this->container->get('usuario_service')->getAll();
    
    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
}

public function get($request, $response, $args){
    $id = $request->getAttribute('id');
    
    $payload = $this->container->get('usuario_service')->get($id);
    
    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
}

public function login($request, $response, $args){
    $data = $request->getParsedBody();
    
    $payload = $this->container->get('usuario_service')->login($data);

    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);

}

public function add($request, $response, $args){
    $data = $request->getParsedBody();
    
    $payload = $this->container->get('usuario_service')->add($data);

    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);

}

public function edit($request, $response, $args){
    $id = $request->getAttribute('id');
    $data = $request->getParsedBody();
    
    $payload = $this->container->get('usuario_service')->edit($data, $id);

    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);

}

}