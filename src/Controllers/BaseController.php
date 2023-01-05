<?php namespace App\Controllers;

use Psr\Container\ContainerInterface;
use App\Service\PersonaService;

abstract class BaseController{

    protected $container;

    public function __construct(ContainerInterface $container){
        $this->container = $container;
    }

    protected function getPersonaService(){
        return $this->container->get('persona_service');
    }
}