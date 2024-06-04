<?php
// importo classi
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/foods.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/arrayProducts.php";


// cibo gatto
$products1 = new Foods("Carne di squalo bianco", 25.00, "./img/squalo.jpeg", new Genre("gatto"), "1000", "2024/06/04");
$products1->setDescription("descrizione carne squalo bianco");
$products1->setQuantityInPack(10);
$products2 = new Foods("Patè di trota albina", 1, "./img/trota.jpeg", new Genre("gatto"), "800", "2024/06/04");
$products2->setDescription("descrizione carne squalo bianco");
$products2->setQuantityInPack(6);

// cibo cane
$products3 = new Foods("Carne cervo Canadese", 25.00, "./img/cervo.jpeg", new Genre("Cane"), "1000", "2023/06/04");
$products3->setDescription("descrizione carne cervo");
$products3->setQuantityInPack(10);
$products4 = new Foods("carne di cogniglio lillipuzziano", 12.00, "./img/coniglio.jpeg", new Genre("Cane"), "800", "2024/05/02");
$products4->setDescription("descrizione carne coniglio");
$products4->setQuantityInPack(6);

// gioco catto
$products5 = new Toys("Gomitolo di lana", 9.99, "./img/gomitolo.png", new Genre("gatto"), "wool", "S");
$products5->setDescription("descrizione gomitolo");
$products5->setBatteriesRequired(false);
$products6 = new Toys("topolino corri corri", 19.99, "./img/topolino.jpeg", new Genre("gatto"), "plastic", "M");
$products6->setDescription("descrizione topolino corri corri");
// $products5->setBatteriesRequired(true);  provo senza passargli il dato

// gioco cane
$products8 = new Toys("osso crick crock", 29.99, "./img/osso.jpeg", new Genre("Cane"), "bone", "M");
$products8->setDescription("descrizione osso crick crock");
$products8->setBatteriesRequired(false);
$products7 = new Toys("palla lancia e riporta", 19.99, "./img/pallina.jpeg", new Genre("Cane"), "plastic", "M");
$products7->setDescription("descrizione pallina lancia e riporta");
$products7->setBatteriesRequired(true);

// cuccia gatto
$products10 = new Kennels("cuccetta da interno", 19.99, "./img/cuccettainterno1.jpeg", new Genre("gatto"), "Cotton", "all size");
$products10->setDescription("descrizione cuccetta da interno");
$products10->setWashable(true);
$products9 = new Kennels("cuccetta da esterno", 29.99, "./img/cuccettaesterno1.jpeg", new Genre("gatto"), "plastic", "S");
$products9->setDescription("descrizione cuccetta da interno");
// $products9->setWashable(false); // provo senza passargli il dato


// cuccia cane
$products12 = new Kennels("cuccetta da interno", 19.99, "./img/cuccettainterno2.jpeg", new Genre("Cane"), "Cotton", "all size");
$products12->setDescription("descrizione cuccetta da interno");
$products12->setWashable(true);
$products11 = new Kennels("cuccetta da esterno", 29.99, "./img/cuccettaesterno2.jpeg", new Genre("Cane"), "plastic", "S");
$products11->setDescription("descrizione cuccetta da interno");
$products11->setWashable(false);


// creo istanza array di prodotti
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
$arrayProducts->SetProducts($products12);
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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>
    <!-- ciclo array -->
    <?php foreach ($arrayProducts->getProducts() as $curProduct) { ?>
        <div class="card" style="width: 18rem;">
            <!-- passo url immagine  -->
            <img class="card-img-top" src="<?php echo $curProduct->getImage() ?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text d-flex justify-content-between">
                    <?php
                    //  ottento nome prodotto
                    echo $curProduct->getName();
                    //  inserimento icona cane o gatto
                        echo $curProduct->genre->getGenre();
                    // inserimento icona categoria
                    echo $curProduct->getIconCategory();
                    ?>
                </p>
                <p class="card-text">
                    <!-- stampo prezzo -->
                    <?php
                    echo "prezzo " . $curProduct->getPrice() . " euro";
                    ?>
                </p>
                <p class="card-text">
                    <!-- controllo se esiste la data di scadenza e la stampo -->
                    <?php if (method_exists($curProduct, 'getExpirationDate')) {
                        echo "scadenza: " . $curProduct->getExpirationDate() . "<br>";
                        echo "peso: " . $curProduct->getWeigth() . " kg <br>";
                        echo $curProduct->getQuantityInPack() . " pz x confezione";
                    }
                    ?>
                </p>
                <p>
                    <!-- controllo se esiste la taglia e la stampo -->
                    <?php if (method_exists($curProduct, 'getSize')) {
                        echo "Taglia: " . $curProduct->getSize() . "<br>";
                        echo "Materiale: " . $curProduct->getMaterial() . "<br>";
                        echo "Lavabile: " . $curProduct->getWashable();
                    }
                    ?>
                </p>
                <p>
                    <!-- controllo se esiste la taglia consigliata per giocare e la stampo -->
                    <?php
                    if (method_exists($curProduct, 'getSuggestedAnimalSize')) {
                        echo "Taglia: " . $curProduct->getSuggestedAnimalSize() . "<br>";
                        echo "Materiale: " . $curProduct->getMaterial() . "<br>";
                        echo "Batterie richieste: " . $curProduct->getBatteriesRequired();
                    }
                    ?>
                </p>
                <p class="card-text">
                    <!-- stampo descrizione -->
                    <?php echo $curProduct->getDescription(); ?>
                </p>
            </div>
        </div>
    <?php } ?>
    <!-- /ciclo array -->
</body>

</html>