<?php 
    require_once __DIR__ . "/classes/Category.php";
    require_once __DIR__ . "/classes/Product.php";
    require_once __DIR__ . "/classes/Toy.php";

    $catsCategory = new Category("Cats", "https://www.favicon.cc/logo3d/822405.png");
    $dogsCategory = new Category("Dogs", "https://www.favicon.cc/logo3d/87502.png");

    $table = new Product("Tavolo Tranquillo", "Un tavolo che rende ogni conversazione tranquilla", "https://upload.wikimedia.org/wikipedia/commons/7/7a/Cassius_Marcellus_Coolidge_-_Poker_Game_%281894%29.png", 5, $dogsCategory, 855.55);

    $plasticBone = new Toy("Osso di gomma", "Osso di gomma per cani un po' irrequieti come la versione del sistema operativo del padrone", "", 45, $dogsCategory, 33.99, "taglia grande", "plastica poliuretanica vegana");
    var_dump($table->getNumberInStock());
    var_dump($table->buy(33));
    var_dump($table->getNumberInStock());


    var_dump($plasticBone->getNumberInStock());
    var_dump($plasticBone->buy(33));
    var_dump($plasticBone->getNumberInStock());
    // var_dump($plasticBone->getPrice());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 OOP Shop</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center p-4">
                    Shop
                </h1>
            </div>
            <div class="col-6 card" >
                <div class="card-body">
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>