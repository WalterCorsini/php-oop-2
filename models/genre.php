<?php
class Genre
{
    public string $genre;

    public function __construct(string $genre)
    {
        //  controllo se quello scritto è un valore consentito
        if (strtolower($genre) === "cane" || strtolower($genre) === "gatto") {
            $this->genre = $genre;
        } else {
            throw new Exception("inserisci come tipo Cane o Gatto");
        }
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
