<?php namespace App\Models;

class BarrioModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM rol";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}