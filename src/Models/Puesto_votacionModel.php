<?php namespace App\Models;

class Puesto_votacionModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM puesto_votacion";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}