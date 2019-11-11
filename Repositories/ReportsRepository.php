<?php

require_once '../config/Connection.php';

class ReportsRepository{

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
    
        public function getPurchaseCustomer() {
        $sql = "    
                select * 
                from customers
                inner join 
                        (select sum(det.priceEach*det.quantityOrdered) purchase,cu.customerNumber
                        from customers cu
                        inner join orders ord
                        on cu.customerNumber=ord.customerNumber
                        inner join 	orderdetails det
                        on ord.orderNumber=det.orderNumber
                        group by cu.customerNumber
                    ) purchase_customer
                on  customers.customerNumber=purchase_customer.customerNumber
                order by purchase_customer.purchase desc
            ";
        $conn= Connection::getConnection();
        $resource = $conn->prepare($sql);
        $resource->execute();
        $rows = $resource->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }
}

