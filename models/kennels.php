<?php

// importo classe generica
require_once __DIR__ . "/products.php";
require_once __DIR__ . "/products.php";
class Kennels extends Products
{
    use Weightable;
    private bool $washable;
    private string $material;
    private array $arrayMaterial = ["cotton", "leather", "pvc", "wood", "plastic"];
    private string $size;
    private string $message = "???";

    public function __construct(string $genre)
    {
        parent::__construct($genre);
        $this->iconCategory = "Categoria Cucce <i class='fa-solid fa-house'></i>";
    }

    public function setWashable($washable)
    {
        if ($washable === true || $washable === false) {
            $this->washable = $washable;
        } else {
            throw new Exception("valori consentiti True o False");
        }
    }

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

    public function setSize($size)
    {

        if (strtolower($size) === "s" || strtolower($size) === "m" || strtolower($size) === "l" || strtolower($size) === "all size") {
            $this->size = $size;
        } else {
            throw new Exception("valori consentit S M L o All Size");
        }
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setMaterial($material)
    {
        if (in_array(strtolower($material), $this->arrayMaterial)) {
            $this->material = $material;
        } else {
            throw new Exception("valori compresi: cotton,leather,pvc,wood,plastic");
        }
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
