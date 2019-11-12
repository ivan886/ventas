<?php

namespace App\Config;

use App\Config\Config;
use \PDO;
   
class Connection {
    protected $id_usuario_login = 0;

    public static function getConnection() {
        
        $config = Config::getConfig("db");
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=' . $config['dbname'] . '', $config['username'], $config['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            //$conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}



