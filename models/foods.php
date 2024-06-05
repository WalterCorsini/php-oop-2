<?php

// importo classe generica
require_once __DIR__ . "/products.php";
require_once __DIR__ . "/../traits/weightable.php";

class Foods extends Products{
    use Weightable;

    private string $expirationDate;
    private int $quantityInPack;
    private string $message = "non specificato";


    public function __construct(string $name, float $price, string $image, Genre $genre, string $expirationDate){
        parent::__construct($name, $price, $image, $genre);
        //  controllare bene il controllo data  
        $this->expirationDate = $expirationDate;

        // inserimento icona categoria
        $this->iconCategory = "Cattegoria Cibo <i class='fa-solid fa-utensils'></i>";
    }

    // inserimento
    public function setQuantityInPack($quantityInPack){
        if ($quantityInPack >= 1 || $quantityInPack <= 100) {
            $this->quantityInPack = $quantityInPack;
        }
    }

    // stampa 
    public function getExpirationDate(){
        return $this->expirationDate;
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
