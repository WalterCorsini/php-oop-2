<?php

// importo classe generica
require_once __DIR__ . "/../traits/weightable.php";
require_once __DIR__ . "/products.php";

class Toys extends Products
{
    use Weightable;
    private bool $batteriesRequired;  // true or false
    private string $material;      // plastic,bone,wood,wool
    private array $arrayMaterial = ["bone", "wood", "plastic", "wool", "cotton"];
    private string $suggestedAnimalSize; // S,M,L
    private string $message = "???";

    public function __construct(string $genre)
    {
        parent::__construct($genre);
        $this->iconCategory = "Categoria Giochi <i class='fa-solid fa-gamepad'></i>";
    }

    public function setBatteriesRequired($batteriesRequired)
    {
        $this->batteriesRequired = $batteriesRequired;
    }

    public function getBatteriesRequired()
    {
        if (isset($this->batteriesRequired)) {
            if ($this->batteriesRequired === true) {
                $this->message = "Si";
            } else {
                $this->message = "No";
            }
        }
        return $this->message;
    }

    public function setMaterial($material)
    {
        // controllo i valori di Material
        if (in_array(strtolower($material), $this->arrayMaterial)) {
            $this->material = $material;
        } else {
            throw new Exception("valori compresi: cotton,wool,bone,wood,plastic");
        }
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setSuggestedAnimalSize($suggestedAnimalSize)
    {
        if (strtolower($suggestedAnimalSize) === "s" || strtolower($suggestedAnimalSize) === "m" || strtolower($suggestedAnimalSize) === "l" || strtolower($suggestedAnimalSize) === "all size") {
            $this->suggestedAnimalSize = $suggestedAnimalSize;
        } else {
            throw new Exception("valori consentit S M L o All Size");
        }
    }

    public function getSuggestedAnimalSize()
    {
        return $this->suggestedAnimalSize;
    }
}
