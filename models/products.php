<?php 

class Products {

    private string  $name;
    private string  $price;
    private string  $description;
    private string  $image;
    private string  $type;

    public function __construct(string $name, string $price, string $image, string $type){
        $this->name     = $name;
        $this->price    = $price;
        $this->image    = $image;
        $this->type     = $type;
    }

    

// inserimento
    public function setDescription($description){
        $this->description = $description;
    }


    
// stampa
    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getImage(){
        return $this->image;
    }

    public function getType(){
        return $this->type;
    }

}





?>