<?php

class Conectar {

    private $host, $user, $pass, $database;

    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->database = "periodismo";
       
    }
    public function conectar() {
        $conexion = new mysqli($this->host,$this->user,$this->pass,$this->database);
        return $conexion;
        
    }

}
$connect = new Conectar();
?>



