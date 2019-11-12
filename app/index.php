<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../app/bootstrap.php';
$data = App\Controller\ProductsController::find('S10_1949');
print_r($data);
