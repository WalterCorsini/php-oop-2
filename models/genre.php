<?php
class Genre
{
    public string $genre;

    public function __construct(string $genre)
    {
        //  controllo se quello scritto è un valore consentito
        if (strtolower($genre) === "cane"){
            $this->genre = "<i class='fa-solid fa-dog text-info'></i>";
        } elseif(strtolower($genre) === "gatto"){
            $this->genre = "<i class='fa-solid fa-cat text-success'></i>";
        }else {
            throw new Exception("inserisci come tipo Cane o Gatto");
        }
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
