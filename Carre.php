<?php 

class Carre extends Forme
{
    private $cote = 4;

    public function aire()
    {
        return $this->cote ** 2;
    }
}