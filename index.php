<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/arrayProducts.php";

$products = new ArrayProducts("pippo",10,"ciao/mamma.jpg", "cane");
var_dump($products);

$products1 = new Products("pippo",10,"ciao/mamma.jpg", "cane");
var_dump($products1);


?>