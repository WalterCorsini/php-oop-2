<?php

trait Weightable{
    private float $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight / 1000;
    }
}
