<?php

include '../Repositories/ReportsRepository.php';

class ReportsController {

    static function getOrdersByCustomer($customerNumber) {
        $repo = new ReportsRepository();
        return $repo->getOrdersByCustomer($customerNumber);
    }

    static function getPurchaseCustomer() {
        $repo = new ReportsRepository();
        return $repo->getPurchaseCustomer();
    }

}
