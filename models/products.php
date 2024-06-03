<?php 

class Products {

    private string  $name;
    private int     $price;
    private string  $description;
    private int     $weight;
    private string  $image;
    private string   $type;

    public function __construct(string $name, int $price, string $image, string $type){
        $this->name     = $name;
        $this->price    = $price;
        $this->image    = $image;
        $this->type     = $type;
    }

    

// inserimento
    public function setDescription($description){
        $this->description = $description;
    }

    public function setWeight($weight){
        $this->weight = $weight;
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

    public function getWeight(){
        return $this->weight;
    }

    public function getImage(){
        return $this->image;
    }

    public function getType(){
        return $this->type;
    }

}





?>