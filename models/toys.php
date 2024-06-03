<?php

require_once __DIR__ . "/products.php";

class Toys extends Products{

    private bool $batteries_required;  // true or false
    private string $material;      // plastic,bone,wood,wool
    private string $suggestedAnimalSize; // S,M,L

    public function __construct(string $name, string $price, string $image,string $type, string $material, string $suggestedAnimalSize){
        parent::__construct($name, $price, $image,$type);
        $this->suggestedAnimalSize = $suggestedAnimalSize;
        $this->material = $material;
    }

    // inserimento valori
    public function setBatteriesRequired($batteries_required){
        $this->batteries_required = $batteries_required;
    }

    // stampa
    public function getSuggestedAnimalSize(){
        return $this->suggestedAnimalSize;
    }
}
?>