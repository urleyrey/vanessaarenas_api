<?php namespace App\Models;

class ComunaModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM comuna";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}