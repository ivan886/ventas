<!DOCTYPE html>

 <?php
require_once '../../controllers/ReportsController.php';
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <?php
          $data=ReportsController::getPurchaseCustomer();
          foreach ($data as $row) {
              echo $row->customerName;
              echo "<br>";
              echo $row->purchase;
              
          }
        ?>
    </head>
    <body>
       
    </body>
</html>
