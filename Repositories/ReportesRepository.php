<?php


require_once '../config/Connection.php';

class ReportesRepository{

    public function getOrdersByCustomer($customerNumber) {
        $sql = "select * 
                from customers cu
                inner join orders ord
                on cu.customerNumber=ord.customerNumber
                where cu.customerNumber=:customerNumber";
        $conn= Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->bindParam(':customerNumber',$customerNumber);   
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

}

$repo = new ReportesRepository();
print_r($repo->getOrdersByCustomer(112));
