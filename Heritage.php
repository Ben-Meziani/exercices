<?php

require 'Forme.php';
require 'Carre.php';
require 'Cercle.php';
require 'Triangle.php';
require 'Person.php';
require 'Policier.php';

class Boom
{

    public function test($form)
    {
        echo $form->aire();
    }
}

(new Boom)->test(new Cercle);