<?php

require_once __DIR__ . "/product.php";

class Foods extends Products{

    private bool $batteries_required;  // true or false
    private string $material;      // plastic,bone,wood
    private string $suggested_dog_size; // S,M,L
}
?>