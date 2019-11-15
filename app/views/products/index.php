<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="../assets/css/design.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <link href="../disenio/card/card.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <nav>
        <div>logo</div>
        <div>
            <ul>
                <li><a>Inicio</a></li>
                <li><a>Comprar</a></li>
                <li><a>Acerca de</a></li>
            </ul>
        </div>
    </nav>

    <body>
        <?php
        require_once '../../../app/bootstrap.php';
        $products = App\Controller\ProductsController::findAll();
        ?>

        <form action="new.php">
            <input type="submit" value="+" />
        </form>
        <div class="contenedor"> 
            <?php
            $content = "";
            foreach ($products as $row) {
                ?>
            <div class="card">
                <img class="card-img" src="bmw.jpg" >
                <div  class="contenido">
                    <h1><?php  echo $row->productName;?></h1>
                    <p>El modelo de moto BMW 1250 GS, con mayor potencia que nunca, es perfecta tanto para ciudad, carretera, y por supuesto, caminos. Con un motor bicilíndrico boxer de 136cV de potencia, para una mayor eficiencia pero a su vez una conducción suave.</p>
                </div>
            </div>
           <?php
            }
            
            ?>



        </div>








    </body>
</html>
