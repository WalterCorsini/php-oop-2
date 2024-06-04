<?php

class Products
{
    protected string    $name;
    // string mi permette di inserire numeri decimali e cmq di fare operazioni algebriche
    protected string    $price;
    protected string    $description;
    protected string    $image;
    public Genre        $genre;   // composizione

    public function __construct(string $name, string $price, string $image, Genre $genre)
    {
        $nameTrim = str_replace(" ","", $name);
        if (strlen($nameTrim) >= 4) {
            $this->name = $name;
        } else {
            throw new Exception("non puoi inserire numeri o caratteri speciali");
        }
        $this->price    = $price;
        $this->image    = $image;
        $this->genre = $genre;
    }

    // inserimento
    public function setDescription($description)
    {
        $this->description = $description;
    }

    // stampa
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }
}
