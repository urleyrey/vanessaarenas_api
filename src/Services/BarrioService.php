<?php namespace App\Services;

use App\Models\BarrioModel;


class BarrioService{

    // OBTENER TODOS LOS REGISTROS
    protected $barrioModel;

    public function __construct(BarrioModel $model){
        $this->barrioModel = $model;
    }

    public function getAll(){
        return $this->barrioModel->getAll();
    }

}