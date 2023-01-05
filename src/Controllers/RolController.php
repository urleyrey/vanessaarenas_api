<?php namespace App\Controllers;

use App\Controllers\BaseController;
use Psr\Container\ContainerInterface;

class RolController extends BaseController{

public function getAll($request, $response, $args){
    $payload = $this->container->get('rol_service')->getAll();
    
    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
}

}