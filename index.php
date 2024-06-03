<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/foods.php";
require_once __DIR__ . "/models/kennels.php";
require_once __DIR__ . "/models/arrayProducts.php";


// cibo gatto
$products1 = new Foods("Carne di squalo bianco",25,"immaginesqualo.jpg", "Gatto","1000","21/11/2024");
$products1->setDescription("descrizione carne squalo bianco");
$products1->setQuantityInPack(10);
$products2 = new Foods("Patè di trota albina",12,"immaginetrota.jpg", "Gatto","800","11/01/2025");
$products2->setDescription("descrizione carne squalo bianco");
$products2->setQuantityInPack(6);
// var_dump($products1,$products2);

// cibo cane
$products3 = new Foods("Carne cervo Canadese",25,"immaginecervo.jpg", "Cane","1000","21/11/2024");
$products3->setDescription("descrizione carne cervo");
$products3->setQuantityInPack(10);
$products4 = new Foods("carne di cogniglio lillipuzziano",12,"immagineconiglio.jpg", "Cane","800","11/01/2025");
$products4->setDescription("descrizione carne coniglio");
$products4->setQuantityInPack(6);
// var_dump($products3,$products4);

// gioco catto
$products4 = new Toys("Gomitolo di lana",9.99,"immaginegomitolo.jpg", "Gatto","wool","S");
$products4->setDescription("descrizione gomitolo");
$products4->setBatteriesRequired(false);
$products5 = new Toys("topolino corri corri",19.99,"immaginetopolino.jpg", "Gatto","plastic","M");
$products5->setDescription("descrizione topolino corri corri");
$products5->setBatteriesRequired(true);
// var_dump($products4,$products5);

// gioco cane
$products6 = new Toys("osso crick crock",9.99,"immagineosso.jpg", "Cane","bone","M");
$products6->setDescription("descrizione osso crick crock");
$products6->setBatteriesRequired(false);
$products7 = new Toys("palla lancia e riporta",19.99,"immaginepallina.jpg", "Cane","plastic","M");
$products7->setDescription("descrizione pallina lancia e riporta");
$products7->setBatteriesRequired(true);
// var_dump($products6,$products7);

// cuccia gatto
$products8 = new Kennels("cuccetta da interno",19.99,"immaginecuccettainterno.jpg", "Gatto","Cotton","All size");
$products8->setDescription("descrizione cuccetta da interno");
$products8->setWashable(true);
$products9 = new Kennels("cuccetta da esterno",29.99,"immaginecuccettaesterno.jpg", "Gatto","plastic","S");
$products9->setDescription("descrizione cuccetta da interno");
$products9->setWashable(false);
// var_dump($products8,$products9);


// cuccia cane
$products10 = new Kennels("cuccetta da interno",19.99,"immaginecuccettainterno.jpg", "Cane","Cotton","All size");
$products10->setDescription("descrizione cuccetta da interno");
$products10->setWashable(true);
$products11 = new Kennels("cuccetta da esterno",29.99,"immaginecuccettaesterno.jpg", "Cane","plastic","S");
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

var_dump($arrayProducts->getProducts());
?>