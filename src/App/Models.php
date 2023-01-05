<?php 
use App\Models\BarrioModel;
use App\Models\ComunaModel;
use App\Models\PersonaModel;
use App\Models\Puesto_votacionModel;
use App\Models\RolModel;
use App\Models\UsuarioModel;
use Psr\Container\ContainerInterface;

$container->set('persona_model',function(ContainerInterface $container){
    return new PersonaModel($container->get('db'));
});

$container->set('barrio_model',function(ContainerInterface $container){
    return new BarrioModel($container->get('db'));
});

$container->set('comuna_model',function(ContainerInterface $container){
    return new ComunaModel($container->get('db'));
});

$container->set('puesto_votacion_model',function(ContainerInterface $container){
    return new Puesto_votacionModel($container->get('db'));
});

$container->set('rol_model',function(ContainerInterface $container){
    return new RolModel($container->get('db'));
});

$container->set('usuario_model',function(ContainerInterface $container){
    return new UsuarioModel($container->get('db'));
});