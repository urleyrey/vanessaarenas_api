<?php namespace App\Services;

use App\Models\Puesto_votacionModel;


class Puesto_votacionService{

    // OBTENER TODOS LOS REGISTROS
    protected $puesto_votacionModel;

    public function __construct(Puesto_votacionModel $model){
        $this->puesto_votacionModel = $model;
    }

    public function getAll(){
        return $this->puesto_votacionModel->getAll();
    }

}