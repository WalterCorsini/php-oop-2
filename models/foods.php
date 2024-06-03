<?php

require_once __DIR__ . "/products.php";

class Foods extends Products{

    private string $expiration_date;
    private int $quantity_in_pack;
    private int $weigth;

    public function __construct(string $name, string $price, string $image,string $type, int $weigth, string $expiration_date)
    {
        parent::__construct($name, $price, $image,$type);

        $this->expiration_date = $expiration_date;
        $this->weigth = $weigth;

    }

    // inserimento
    public function setQuantityInPack($quantity_in_pack)
    {
        $this->quantity_in_pack = $quantity_in_pack;

        return $this;
    }
}