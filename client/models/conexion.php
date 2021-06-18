<?php 

class Conexion extends PDO {

    private $host = "localhost";
    private $dbname = "libreria_neko";
    private $usuario = "root";
    private $password = "";

    public function __construct() {
        try {
            parent::__construct('mysql:host=' . $this->host. ';dbname=' . $this->dbname, $this->usuario, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch(PDOException $e) {
            echo 'Error: ' -> $e->getMessage();
            exit;
        }
    }

}