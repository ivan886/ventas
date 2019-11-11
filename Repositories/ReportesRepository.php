<?php


require_once '../config/Connection.php';

class ReportesRepository{

    public function getAll() {
        $sql = "select * from customers";
        $conn= Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function getById() {
        
    }

    public function delete() {
        
    }

    public function save($aerolinea) {

        $sql = " insert into "
                . " aerolinea (nombre,Nit) "
                . "  values (:nombre,:Nit)";



        $resource = getConection()->prepare($sql);
        $resource->bindValue(":nombre", $aerolinea->getNombre());
        $resource->bindValue(":Nit", $aerolinea->getNit());
        $resource->execute();
    }

}

$repo = new ReportesRepository();
print_r($repo->getAll());
