<?php

// importo classe generica
require_once __DIR__ . "/products.php";

class Toys extends Products  // extends
{

    private bool $batteriesRequired;  // true or false
    private string $material;      // plastic,bone,wood,wool
    private array $arrayMaterial=["bone","wood","plastic","wool","cotton"];
    private string $suggestedAnimalSize; // S,M,L
    private string $message = "???";

    public function __construct(string $name, float $price, string $image, Genre $genre, string $material, string $suggestedAnimalSize)
    {
        parent::__construct($name, $price, $image, $genre);

        // controllo suggestAnimalSize
        if(strtolower($suggestedAnimalSize) === "s" || strtolower($suggestedAnimalSize) === "m" || strtolower($suggestedAnimalSize) === "l" || strtolower($suggestedAnimalSize) === "all size" ){
            $this->suggestedAnimalSize = $suggestedAnimalSize;
        } else {
            throw new Exception("valori consentit S M L o All Size");
        }
                // controllo i valori di Material
                if(in_array(strtolower($material), $this->arrayMaterial)){
                    $this->material = $material;
                } else {
                    throw new Exception("valori compresi: cotton,wool,bone,wood,plastic");
                }

        // inserimento icona categoria
        $this->iconCategory = "Categoria Giochi <i class='fa-solid fa-gamepad'></i>";        
    }

    // inserimento valori
    public function setBatteriesRequired($batteries_required)
    {
        $this->batteriesRequired = $batteries_required;
    }

    // stampa
    public function getSuggestedAnimalSize()
    {
        return $this->suggestedAnimalSize;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getBatteriesRequired()
    {
        // controllo se esiste e se è vera o falsa altrimenti stampo cmq un messaggio di default
        if (isset($this->batteriesRequired)) {
            if ($this->batteriesRequired === true) {
                $this->message = "Si";
            } else {
                $this->message = "No";
            }
        }
        return $this->message;
    }
}
