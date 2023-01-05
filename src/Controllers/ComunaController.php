<?php namespace App\Controllers;

use App\Controllers\BaseController;
use Psr\Container\ContainerInterface;

class ComunaController extends BaseController{

public function getAll($request, $response, $args){
    $payload = $this->container->get('comuna_service')->getAll();
    
    $response->getBody()->write(json_encode($payload));
    return $response
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
}

}