<?php

// importo classe generica
require_once __DIR__ . "/products.php";

class Kennels extends Products  // extends
{
    private bool $washable;  // true or false
    private string $material;      // cotton, leather, pvc, wood
    private array $arrayMaterial=["cotton","leather","pvc","wood","plastic"];
    private string $size; // S,M,L,All size
    private string $message = "???";

    public function __construct(string $name, string $price, string $image, Genre $genre, string $material, string $size)
    {
        parent::__construct($name, $price, $image, $genre);
        //  controllo se i valori sono tra quelli consentiti
        if(strtolower($size) === "s" || strtolower($size) === "m" || strtolower($size) === "l" || strtolower($size) === "all size" ){
            $this->size = $size;
        } else {
            throw new Exception("valori consentit S M L o All Size");
        }

        // cotton, leather, pvc, wood
        if(in_array(strtolower($material), $this->arrayMaterial)){
            $this->material = $material;
        } else {
            throw new Exception("valori compresi: cotton,leather,pvc,wood,plastic");
        }
    }

    // inserimento
    public function setWashable($washable)
    {
        if($washable === true || $washable === false){
            $this->washable = $washable;
        } else {
            throw new Exception("valori consentiti True o False");
        }
    }


    // stampa
    public function getSize()
    {
        return $this->size;
    }

    //  se non è specifificato stampo comunque qualcosa
    public function getWashable()
    {
        if (isset($this->washable)) {
            if ($this->washable === true) {
                $this->message = "Si";
            } elseif ($this->washable === false) {
                $this->message = "No";
            }
        }
        return $this->message;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
