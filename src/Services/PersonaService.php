<?php namespace App\Services;

use App\Models\PersonaModel;


class PersonaService{

    // OBTENER TODOS LOS REGISTROS
    protected $personaModel;

    public function __construct(PersonaModel $model){
        $this->personaModel = $model;
    }

    public function getAll(){
        return $this->personaModel->getAll();
    }

    public function get($id){
        return $this->personaModel->get($id);
    }

    public function add($data){
        return $this->personaModel->add($data);
    }

    public function edit($data, $id){
        return $this->personaModel->edit($data, $id);
    }

}