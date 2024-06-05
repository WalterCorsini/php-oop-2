<?php
// importo classi
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/genre.php";
require_once __DIR__ . "/models/foods.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/arrayProducts.php";
$arrayErrori = [];

// cibo gatto
$products1 = new Foods("Carne di squalo bianco", 25.00, "./img/squalo.jpeg", new Genre("gatto"), "2024/06/04");
$products1->setDescription("descrizione carne squalo bianco");
$products1->setQuantityInPack(10);


$products2 = new Foods("Patè di trota albina", 1, "./img/trota.jpeg", new Genre("gatto"), "2024/06/04");
$products2->setQuantityInPack(6);

//  exception in descrizione gestita in array di errori e stampata in pagina in un div.
try {
    $products2->setDescription("descrizione pate di trota albina");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


// cibo cane
$products3 = new Foods("Carne cervo Canadese", 25.00, "./img/cervo.jpeg", new Genre("Cane"), "2023/06/04");
$products3->setQuantityInPack(10);

try {
    $products3->setDescription("desscrizione carne di cerco canadese");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


$products4 = new Foods("carne di cogniglio lillipuzziano", 12.00, "./img/coniglio.jpeg", new Genre("Cane"), "2024/05/02");
$products4->setQuantityInPack(6);

try {
    $products4->setDescription("descrizione carne coniglio");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// gioco catto
$products5 = new Toys("Gomitolo di lana", 9.99, "./img/gomitolo.png", new Genre("gatto"), "wool", "S");
$products5->setBatteriesRequired(false);

try {
    $products5->setDescription("descrizione gomitolo");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

$products6 = new Toys("topolino corri corri", 19.99, "./img/topolino.jpeg", new Genre("gatto"), "plastic", "M");

try {
    $products6->setDescription("descrizione topolino corri corri");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}
// $products5->setBatteriesRequired(true);  provo senza passargli il dato

// gioco cane
$products8 = new Toys("osso crick crock", 29.99, "./img/osso.jpeg", new Genre("Cane"), "bone", "M");
$products8->setBatteriesRequired(false);

try {
    $products8->setDescription("descrizione osso crick crock");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


$products7 = new Toys("palla lancia e riporta", 19.99, "./img/pallina.jpeg", new Genre("Cane"), "plastic", "M");
$products7->setBatteriesRequired(true);

try {
    $products7->setDescription("descrizione pallina lancia e riporta");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}



// cuccia gatto
$products10 = new Kennels("cuccetta da interno", 19.99, "./img/cuccettainterno1.jpeg", new Genre("gatto"), "Cotton", "all size");
$products10->setWashable(true);

try {
    $products10->setDescription("descrizione cuccetta da interno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}


$products9 = new Kennels("cuccetta da esterno", 29.99, "./img/cuccettaesterno1.jpeg", new Genre("gatto"), "plastic", "S");

try {
    $products9->setDescription("descrizione cuccetta da esterno");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}
// $products9->setWashable(false); // provo senza passargli il dato


// cuccia cane
$products12 = new Kennels("cuccetta da interno", 19.99, "./img/cuccettainterno2.jpeg", new Genre("Cane"), "Cotton", "all size");
$products12->setWashable(true);
try {
    $products12->setDescription("descrizione");
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

$products11 = new Kennels("cuccetta da esterno", 29.99, "./img/cuccettaesterno2.jpeg", new Genre("Cane"), "plastic", "S");
$products11->setWashable(false);
try {
    $products11->setDescription("desc"); // minore 10 caratteri
} catch (Exception $e) {
    $errore["messaggio"] = $e->getMessage();
    $errore["riga"] = $e->getLine();
    $arrayErrori[] = $errore;
}

// inserimento peso con traits
$products1->setWeight(9500);
$products2->setWeight(7500);
$products3->setWeight(6000);
$products4->setWeight(10000);
$products5->setWeight(400);
$products6->setWeight(300);
$products7->setWeight(200);
$products8->setWeight(100);
$products9->setWeight(5000);
$products10->setWeight(10000);
$products11->setWeight(7000);
$products12->setWeight(10000);

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