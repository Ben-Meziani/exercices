<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");

$harry = new Personnage("Harry");

$merlin->attaque($harry);



var_dump($merlin);
var_dump($harry);