<?php

require_once __DIR__ . "/products.php";

class Foods extends Products{

    private string $expirationDate;
    private int $quantity_in_pack;
    private int $weigth;

    public function __construct(string $name, string $price, string $image,string $type, int $weigth, string $expirationDate)
    {
        parent::__construct($name, $price, $image,$type);

        $this->expirationDate = $expirationDate;
        $this->weigth = $weigth;

    }

    // inserimento
    public function setQuantityInPack($quantity_in_pack)
    {
        $this->quantity_in_pack = $quantity_in_pack;

        return $this;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}