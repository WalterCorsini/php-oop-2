<?php

// importo classe generica
require_once __DIR__ . "/products.php";

class Kennels extends Products  // extends
{
    private bool $washable;  // true or false
    private string $material;      // cotton, leather, pvc, wood
    private string $size; // S,M,L,All size
    private string $message = "???";

    public function __construct(string $name, string $price, string $image, Genre $genre, string $material, string $size)
    {
        parent::__construct($name, $price, $image, $genre);
        $this->size = $size;
        $this->material = $material;
    }

    public function setWashable($washable)
    {
        $this->washable = $washable;
    }

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
