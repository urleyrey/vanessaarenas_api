<?php namespace App\Services;

use App\Models\ComunaModel;


class ComunaService{

    // OBTENER TODOS LOS REGISTROS
    protected $comunaModel;

    public function __construct(ComunaModel $model){
        $this->comunaModel = $model;
    }

    public function getAll(){
        return $this->comunaModel->getAll();
    }

}