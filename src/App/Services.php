<?php 

use App\Services\BarrioService;
use App\Services\ComunaService;
use App\Services\PersonaService;
use App\Services\Puesto_votacionService;
use App\Services\RolService;
use App\Services\UsuarioService;
use Psr\Container\ContainerInterface;

$container->set('persona_service',function(ContainerInterface $container){
    return new PersonaService($container->get('persona_model'));
});

$container->set('barrio_service',function(ContainerInterface $container){
    return new BarrioService($container->get('barrio_model'));
});

$container->set('comuna_service',function(ContainerInterface $container){
    return new ComunaService($container->get('comuna_model'));
});

$container->set('puesto_votacion_service',function(ContainerInterface $container){
    return new Puesto_votacionService($container->get('puesto_votacion_model'));
});

$container->set('rol_service',function(ContainerInterface $container){
    return new RolService($container->get('rol_model'));
});

$container->set('usuario_service',function(ContainerInterface $container){
    return new UsuarioService($container->get('usuario_model'));
});