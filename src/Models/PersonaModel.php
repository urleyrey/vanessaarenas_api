<?php namespace App\Models;

class PersonaModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM persona";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function get($id){
        $sql = "SELECT * FROM persona WHERE id = ".$id;
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function add($data){
        //FECHA EN FORMATO YYYY-MM-DD
        $sql = "INSERT INTO persona (nombres, apellidos, documento, celular, sexo, fecha_nacimiento,
                barrio_id, puesto_id, rol_id, lider_id) 
                VALUES ('".$data['nombres']."', '".$data['apellidos']."', '".$data['documento']."', '".$data['celular']."', 
                '".$data['sexo']."', '".$data['fecha_nacimiento']."', ".$data['barrio_id'].", ".$data['puesto_id'].", 
                ".$data['rol_id'].", ".$data['lider_id'].")";
        
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

    public function edit($data, $id){
        //FECHA EN FORMATO YYYY-MM-DD
        $sql = "UPDATE persona SET nombres='".$data['nombres']."', apellidos='".$data['apellidos']."', 
                documento='".$data['documento']."', celular='".$data['celular']."', sexo='".$data['sexo']."',
                fecha_nacimiento='".$data['fecha_nacimiento']."', barrio_id=".$data['barrio_id'].",
                puesto_id=".$data['puesto_id'].", rol_id=".$data['rol_id'].", lider_id=".$data['lider_id']." 
                WHERE id = ".$id;

        $query = $this->pdo->query($sql);
        return $query->rowCount();
    }
}