<?php namespace App\Models;

class UsuarioModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM usuario";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function get($id){
        $sql = "SELECT * FROM usuario WHERE id = ".$id;
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function login($data){
        $sql = "SELECT * FROM usuario WHERE nombre = '".$data['nombre']."' and clave = '".$data['clave']."'";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function add($data){
        $sql = "INSERT INTO usuario (nombre, clave, persona_id, estado) 
                VALUES ('".$data['nombre']."', '".$data['clave']."', 
                ".$data['persona_id'].", ".$data['estado'].")";
        
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function edit($data, $id){
        $sql = "UPDATE usuario SET nombre='".$data['nombre']."', clave='".$data['clave']."',
                persona_id=".$data['persona_id'].", estado=".$data['estado']." 
                WHERE id = ".$id;

        $query = $this->pdo->query($sql);
        return $query->rowCount();
    }
}