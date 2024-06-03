<?php

require_once __DIR__ . "/product.php";

class Foods extends Products{
    private bool $washable;  // true or false
    private string $material;      // cotton, leather, pvc, wood
    private string $size; // S,M,L
}
?>