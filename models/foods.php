<?php

// importo classe generica
require_once __DIR__ . "/products.php";
require_once __DIR__ . "/../traits/weightable.php";

class Foods extends Products
{
    use Weightable;
    private string $expirationDate;
    private int $quantityInPack;
    private string $message = "non specificato";

    public function __construct(string $genre)
    {
        parent::__construct($genre);
        $this->iconCategory = "Cattegoria Cibo <i class='fa-solid fa-utensils'></i>";
    }

    public function setQuantityInPack($quantityInPack)
    {
        if ($quantityInPack >= 1 || $quantityInPack <= 100) {
            $this->quantityInPack = $quantityInPack;
        }
    }

    public function getQuantityInPack()
    {
        if (!empty($this->quantityInPack)) {
            return $this->quantityInPack;
        } else {
            return $this->message;
        }
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
