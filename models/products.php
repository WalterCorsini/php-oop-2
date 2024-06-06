<?php

class Products
{
    protected string    $name;
    // string mi permette di inserire numeri decimali e cmq di fare operazioni algebriche
    protected float     $price;
    protected string    $description = "";
    protected string    $image;
    protected string    $genre;
    protected string $iconCategory;

    public function __construct(string $genre)
    {
        $this->setGenre($genre);
    }

    public function setName($name)
    {
        $nameTrim = str_replace(" ", "", $name);
        if (strlen($nameTrim) >= 4) {
            $this->name = $name;
        } else {
            throw new Exception("non puoi inserire numeri o caratteri speciali");
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        if ($price > 0) {
            $this->price    = $price;
        } else {
            throw new Exception("non puoi inserire un valore negativo");
        }
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($description)
    {
        $descriptionNoSpace = str_replace(" ", "", $description);
        if (strlen($descriptionNoSpace) >= 10 && strlen($descriptionNoSpace) <= 100) {
            $this->description = $description;
        } else {
            throw new exception("inserisci una descrizione tra i 10 e i 100 caratteri");
        }
    }

    public function getDescription()
    {
        return $this->description;
    }



    public function setImage($image)
    {
        if (file_exists($image)) {
            $this->image = $image;
        } else {
            throw new Exception("inserisci una directory corretta");
        }
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setGenre(string $genre)
    {
        if (strtolower($genre) === "cane") {
            $this->genre = "<i class='fa-solid fa-dog text-info'></i>";
        } elseif (strtolower($genre) === "gatto") {
            $this->genre = "<i class='fa-solid fa-cat text-success'></i>";
        } else {
            throw new Exception("Inserisci come tipo Cane o Gatto");
        }
    }

    public function getGenre()
    {
        return $this->genre;
    }




    public function getIconCategory()
    {
        return $this->iconCategory;
    }

}
