<?php

require_once __DIR__ . "/product.php";

class Food extends Products{

    private string $expiration_date;
    private int $quantity_in_pack;
}