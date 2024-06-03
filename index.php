<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/foods.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/arrayProducts.php";


// cibo gatto
$products1 = new Foods("Carne di squalo bianco", 25, "https://picsum.photos/200", "Gatto", "1000", "21/11/2024");
$products1->setDescription("descrizione carne squalo bianco");
$products1->setQuantityInPack(10);
$products2 = new Foods("Patè di trota albina", 12, "https://picsum.photos/200", "Gatto", "800", "11/01/2025");
$products2->setDescription("descrizione carne squalo bianco");
$products2->setQuantityInPack(6);
// var_dump($products1,$products2);

// cibo cane
$products3 = new Foods("Carne cervo Canadese", 25, "https://picsum.photos/200", "Cane", "1000", "21/11/2024");
$products3->setDescription("descrizione carne cervo");
$products3->setQuantityInPack(10);
$products4 = new Foods("carne di cogniglio lillipuzziano", 12, "https://picsum.photos/200", "Cane", "800", "11/01/2025");
$products4->setDescription("descrizione carne coniglio");
$products4->setQuantityInPack(6);
// var_dump($products3,$products4);

// gioco catto
$products4 = new Toys("Gomitolo di lana", 9.99, "https://picsum.photos/200", "Gatto", "wool", "S");
$products4->setDescription("descrizione gomitolo");
$products4->setBatteriesRequired(false);
$products5 = new Toys("topolino corri corri", 19.99, "https://picsum.photos/200", "Gatto", "plastic", "M");
$products5->setDescription("descrizione topolino corri corri");
$products5->setBatteriesRequired(true);
// var_dump($products4,$products5);

// gioco cane
$products6 = new Toys("osso crick crock", 9.99, "https://picsum.photos/200", "Cane", "bone", "M");
$products6->setDescription("descrizione osso crick crock");
$products6->setBatteriesRequired(false);
$products7 = new Toys("palla lancia e riporta", 19.99, "https://picsum.photos/200", "Cane", "plastic", "M");
$products7->setDescription("descrizione pallina lancia e riporta");
$products7->setBatteriesRequired(true);
// var_dump($products6,$products7);

// cuccia gatto
$products8 = new Kennels("cuccetta da interno", 19.99, "https://picsum.photos/200", "Gatto", "Cotton", "All size");
$products8->setDescription("descrizione cuccetta da interno");
$products8->setWashable(true);
$products9 = new Kennels("cuccetta da esterno", 29.99, "https://picsum.photos/200", "Gatto", "plastic", "S");
$products9->setDescription("descrizione cuccetta da interno");
$products9->setWashable(false);
// var_dump($products8,$products9);


// cuccia cane
$products10 = new Kennels("cuccetta da interno", 19.99, "https://picsum.photos/200", "Cane", "Cotton", "All size");
$products10->setDescription("descrizione cuccetta da interno");
$products10->setWashable(true);
$products11 = new Kennels("cuccetta da esterno", 29.99, "https://picsum.photos/200", "Cane", "plastic", "S");
$products11->setDescription("descrizione cuccetta da interno");
$products11->setWashable(false);
// var_dump($products10,$products11);

$arrayProducts = new ArrayProducts();

$arrayProducts->SetProducts($products1);
$arrayProducts->SetProducts($products2);
$arrayProducts->SetProducts($products3);
$arrayProducts->SetProducts($products4);
$arrayProducts->SetProducts($products5);
$arrayProducts->SetProducts($products6);
$arrayProducts->SetProducts($products7);
$arrayProducts->SetProducts($products8);
$arrayProducts->SetProducts($products9);
$arrayProducts->SetProducts($products10);
$arrayProducts->SetProducts($products11);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</head>

<body>
    <?php foreach ($arrayProducts->getProducts() as $curProduct) { ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $curProduct->getImage() ?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">
                    <?php
                        echo $curProduct->getName();
                        if(strtolower($curProduct->gettype()) === "cane"){
                            echo "<i class='fa-solid fa-dog text-success'></i>";
                        } else {
                            echo "<i class='fa-solid fa-cat text-danger'></i> ";
                        }
                        if(method_exists($curProduct, 'getExpirationDate')){
                            echo "<i class='fa-solid fa-utensils'></i>";
                        }
                        if(method_exists($curProduct, 'getSuggestedAnimalSize')){
                            echo "<i class='fa fa-solid fa-gamepad'></i>";
                        }
                        if(method_exists($curProduct, 'getSize')){
                            echo "<i class='fa-solid fa-house'></i>";
                        }
                    ?>
                </p>
                <p class="card-text">
                    <?php
                        echo $curProduct->getPrice() . " euro";
                    ?>
                </p>
                <p class="card-text">
                        <?php if(method_exists($curProduct, 'getExpirationDate')){
                            echo "scadenza " . $curProduct->getExpirationDate();
                        }
                        ?>
                </p>
                <p class="card-text">
                    <?php
                        echo $curProduct->getDescription()
                        ?>
                </p>
            </div>
        </div>
        <?php } ?>
</body>

</html>