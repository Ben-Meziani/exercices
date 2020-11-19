<?php

class Enfant extends Parents
{
    public function toto()
    {
        return $this->getNombreDeTete();
    }
}