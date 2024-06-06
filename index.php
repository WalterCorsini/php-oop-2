<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
// require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/foods.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/arrayProducts.php";

$arrayErrori = [];

// item 1
$products1 = new Foods("Gatto");
$products1->setName("Carne di squalo bianco");
$products1->setPrice(25.00);
$products1->setImage("./img/squalo.jpeg");
$products1->setQuantityInPack(10);
$products1->setExpirationDate('2024/06/29');
$products1->setWeight(9500);

try {
    $products1->setDescription("descrizione carne squalo bianco");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 2
$products2 = new Foods("Gatto");
$products2->setName("Patè di trota albina");
$products2->setPrice(10.00);
$products2->setImage("./img/trota.jpeg");
$products2->setQuantityInPack(6);
$products2->setExpirationDate('2025/07/21');
$products2->setWeight(7500);

try {
    $products2->setDescription("descrizione pate di trota albina");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


// item 3
$products3 = new Foods("Cane");
$products3->setName("carne di cervo canadese");
$products3->setPrice(10.00);
$products3->setImage("./img/cervo.jpeg");
$products3->setQuantityInPack(6);
$products3->setExpirationDate('2024/06/21');
$products3->setWeight(6000);
try {
    $products3->setDescription("des");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 4
$products4 = new Foods("Cane");
$products4->setName("carne di coniglio lillipuzziano");
$products4->setPrice(12.00);
$products4->setImage("./img/coniglio.jpeg");
$products4->setQuantityInPack(6);
$products4->setExpirationDate('2025/07/20');
$products4->setWeight(10000);
try {
    $products4->setDescription("desscrizione carne di coniglio lillipuzziano");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 5
$products5 = new Toys("Gatto");
$products5->setName("gomitolo di lana");
$products5->setPrice(9.99);
$products5->setImage("./img/gomitolo.png");
$products5->setBatteriesRequired(false);
$products5->setMaterial("wool");
$products5->setSuggestedAnimalSize("S");
$products5->setWeight(400);
try {
    $products5->setDescription("descrizione gomitolo");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 6
$products6 = new Toys("Gatto");
$products6->setName("Topolino corri corri");
$products6->setPrice(19.99);
$products6->setImage("./img/topolino.jpeg");
$products6->setBatteriesRequired(false);
$products6->setMaterial("plastic");
$products6->setSuggestedAnimalSize("M");
$products6->setWeight(300);
try {
    $products6->setDescription("descrizione topolino corri corri");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


// item 7
$products7 = new Toys("Cane");
$products7->setName("palla lancia e riporta");
$products7->setPrice(19.99);
$products7->setImage("./img/pallina.jpeg");
$products7->setBatteriesRequired(false);
$products7->setMaterial("plastic");
$products7->setSuggestedAnimalSize("M");
$products7->setWeight(200);
try {
    $products7->setDescription("descrizione palla lncia e riporta");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 8
$products8 = new Toys("Cane");
$products8->setName("osso crick crok");
$products8->setPrice(29.99);
$products8->setImage("./img/osso.jpeg");
$products8->setBatteriesRequired(false);
$products8->setMaterial("bone");
$products8->setSuggestedAnimalSize("M");
$products8->setWeight(100);
try {
    $products8->setDescription("descrizione osso crick crock");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 9
$products9 = new Kennels("Gatto");
$products9->setName("cuccetta da esterno");
$products9->setPrice(29.99);
$products9->setImage("./img/cuccettaesterno1.jpeg");
$products9->setMaterial("plastic");
$products9->setSize("S");
$products9->setWashable(false);
$products9->setWeight(5000);
try {
    $products9->setDescription("descrizione cuccetta da esterno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 10
$products10 = new Kennels("Gatto");
$products10->setName("cuccetta da interno");
$products10->setPrice(19.99);
$products10->setImage("./img/cuccettainterno1.jpeg");
$products10->setMaterial("Cotton");
$products10->setSize("All Size");
$products10->setWashable(true);
$products10->setWeight(10000);
try {
    $products10->setDescription("descrizione cuccetta da interno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 11
$products11 = new Kennels("Cane");
$products11->setName("cuccetta da esterno");
$products11->setPrice(29.99);
$products11->setImage("./img/cuccettaesterno2.jpeg");
$products11->setMaterial("Plastic");
$products11->setSize("S");
$products11->setWashable(true);
$products11->setWeight(7000);
try {
    $products11->setDescription("descrizione cuccetta da esterno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// item 12
$products12 = new Kennels("Cane");
$products12->setName("cuccetta da interno");
$products12->setPrice(19.99);
$products12->setImage("./img/cuccettainterno2.jpeg");
$products12->setMaterial("Cotton");
$products12->setSize("S");
$products12->setWashable(true);
$products12->setWeight(10000);

try {
    $products12->setDescription("descrizione cuccetta da interno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

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
                    echo $curProduct->getGenre();
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
                        echo "Batterie richieste: " . $curProduct->getBatteriesRequired() . "<br>";
                    }
                    ?>
                </p>
                <p>
                    <?php echo "Peso: " . $curProduct->getWeight() . " kg <br>"; ?>

                </p>
                <p class="card-text">
                    <!-- stampo descrizione -->
                    <?php echo $curProduct->getDescription(); ?>
                </p>
            </div>
        </div>
    <?php } ?>
    <!-- /ciclo array -->
    <?php foreach ($arrayErrori as $curError) { ?>
        <div class="errori">
            <?php echo $curError['messaggio']; ?>
            <?php echo "a riga: " . $curError['riga']; ?>
        </div>
    <?php } ?>

</body>

</html>