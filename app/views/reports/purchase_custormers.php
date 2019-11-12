<!DOCTYPE html>
<?php
        require_once '../../../app/bootstrap.php';
        $data= App\Controller\ReportsController::getPurchaseCustomer();
     ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
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
