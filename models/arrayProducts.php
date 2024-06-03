<?php

class ArrayProducts {
    private array $products;

    // stalva prodotto
    public function setProducts($products){
        $this->products[] = $products;
    }

    // stampa prodotto
    public function getProducts(){
        return $this->products;
    }
}








?>