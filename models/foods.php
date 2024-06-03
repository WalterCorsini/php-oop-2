<?php

// importo classe generica
require_once __DIR__ . "/products.php";

class Foods extends Products  // extends
{

    private string $expirationDate;
    private int $quantityInPack;
    private int $weigth;
    private string $message = "non specificato";


    public function __construct(string $name, string $price, string $image, Genre $genre, int $weigth, string $expirationDate)
    {
        parent::__construct($name, $price, $image, $genre);

        $this->expirationDate = $expirationDate;
        // trasformo in chili il peso.
        $weigth = $weigth / 100;
        $this->weigth = $weigth;
    }

    // inserimento
    public function setQuantityInPack($quantityInPack){
        $this->quantityInPack = $quantityInPack;
    }

    // stampa 
    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function getWeigth(){
        return $this->weigth;
    }

    //  se il valore è vuoto do un messaggio
    public function getQuantityInPack(){
        if (!empty($this->quantityInPack)) {
            return $this->quantityInPack;
        } else {
            return $this->message;
        }
    }
}
