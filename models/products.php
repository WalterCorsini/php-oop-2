<?php

class Products
{
    protected string    $name;
    // string mi permette di inserire numeri decimali e cmq di fare operazioni algebriche
    protected float     $price;
    protected string    $description;
    protected string    $image;
    public Genre        $genre;   // composizione
    protected string $iconCategory;

    public function __construct(string $name, float $price, string $image, Genre $genre)
    {
        $nameTrim = str_replace(" ", "", $name);
        if (strlen($nameTrim) >= 4) {
            $this->name = $name;
        } else {
            throw new Exception("non puoi inserire numeri o caratteri speciali");
        }
        if ($price > 0) {
            $this->price    = $price;
        } else {
            throw new Exception("non puoi inserire un valore negativo");
        }
        // se esiste l'immagine nella directory
        if (file_exists($image)) {
            $this->image    = $image;
        } else {
            throw new Exception("inserisci una directory corretta");
        }
        $this->genre = $genre;
    }

    // inserimento
    public function setDescription($description)
    {
        //  controllo caratteri minimo massimo senza considerare lo spazio
        $descriptionNoSpace = str_replace(" ", "", $description);
        if (strlen($descriptionNoSpace) >= 10 && strlen($descriptionNoSpace) <= 100) {
            $this->description = $description;
        }
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

    // stampa descrizione con controllo alla stampa per poterlo visualizzare nel punto corretto
    public function getDescription()
    {
        if (!isset($this->description)) {
            throw new Exception("inserisci una descrizione da min 10 caratteri a massimo 100");
        }
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getIconCategory()
    {
        return $this->iconCategory;
    }
}
