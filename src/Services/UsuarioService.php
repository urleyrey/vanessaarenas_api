<?php namespace App\Services;

use App\Models\UsuarioModel;


class UsuarioService{

    // OBTENER TODOS LOS REGISTROS
    protected $usuarioModel;

    public function __construct(UsuarioModel $model){
        $this->usuarioModel = $model;
    }

    public function getAll(){
        return $this->usuarioModel->getAll();
    }

    public function get($id){
        return $this->usuarioModel->get($id);
    }

    public function login($data){
        return $this->usuarioModel->login($data);
    }

    public function add($data){
        return $this->usuarioModel->add($data);
    }

    public function edit($data, $id){
        return $this->usuarioModel->edit($data, $id);
    }

}