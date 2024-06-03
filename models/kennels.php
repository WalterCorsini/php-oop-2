<?php

require_once __DIR__ . "/products.php";

class Kennels extends Products{
    private bool $washable;  // true or false
    private string $material;      // cotton, leather, pvc, wood
    private string $size; // S,M,L,All size

    public function __construct(string $name, string $price, string $image,string $type, string $material, string $size)
    {
        parent::__construct($name, $price, $image,$type);
        $this->size = $size;
        $this->material = $material;
    }

    public function setWashable($washable){
        $this->washable = $washable;
    }
}
?>