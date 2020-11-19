<?php

class Voiture
{
    public $marque;
    public $couleur;

    public function demarrer()
    {
        echo 'Vroum vroum!!!!';
    }

    public function arreter()
    {
        echo 'Pumm!!!!';
    }

    public function klaxonner()
    {
        echo 'Pim Pimm!!!!';
    }
}