<!DOCTYPE html>
<?php
require_once '../controllers/ReportsController.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    </body>
    
    <?php
        if(isset($_GET["customer_id"])){
          $data=ReportsController::getOrdersByCustomer($_GET["customer_id"]);
          foreach ($data as $row) {
              echo $row->customerName;
              echo "<br>";
          }  
       }
    ?>
    
</html>
