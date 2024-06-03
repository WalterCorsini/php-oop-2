<?php

require_once __DIR__ . "/products.php";

class Toys extends Products{

    private bool $batteries_required;  // true or false
    private string $material;      // plastic,bone,wood,wool
    private string $suggested_dog_size; // S,M,L

    public function __construct(string $name, string $price, string $image,string $type, string $material, string $suggested_dog_size)
    {
        parent::__construct($name, $price, $image,$type);
        $this->suggested_dog_size = $suggested_dog_size;
        $this->material = $material;
    }

    // inserimento valori
    public function setBatteriesRequired($batteries_required)
    {
        $this->batteries_required = $batteries_required;
    }
}
?>