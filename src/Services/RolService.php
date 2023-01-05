<?php namespace App\Services;

use App\Models\RolModel;


class RolService{

    // OBTENER TODOS LOS REGISTROS
    protected $rolModel;

    public function __construct(RolModel $model){
        $this->rolModel = $model;
    }

    public function getAll(){
        return $this->rolModel->getAll();
    }

}