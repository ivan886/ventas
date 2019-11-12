
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../../../app/bootstrap.php';
        $products = App\Controller\ProductsController::findAll();
        ?>

        <form action="new.php">
            <input type="submit" value="+" />
        </form>

        <table border="1">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Line</th>
                    <th>Product Description</th>
                    <th>Quantity in Stock</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $content="";
                foreach ($products as $row) {
                    $content.= "   <tr>
                           <td>{$row->productCode}</td>
                            <td>{$row->productName}</td>
                            <td>{$row->productLine}</td>
                            <td>{$row->productDescription}</td>
                            <td>{$row->quantityInStock}</td>
                           </tr>";
                }
                echo $content;
                ?>
            </tbody>
        </table>


    </body>
</html>