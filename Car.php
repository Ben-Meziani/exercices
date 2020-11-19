<?php

class Car
{
    var $brand;
    var $model;
    var $power;

    public function __construct($brand, $model, $power)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->power = $power;
    }

    public function fullModel()
    {
        return $this->brand . $this->model . $this->power ;
    }
}

$bmw = new Car('BMW', 'Serie 5', '50 Ch');
$mercedes = new Car('Mercedes', 'Classe E', '60 Ch');

$modelCompletBmw = $bmw->fullModel();
$modelCompletMercedes = $mercedes->fullModel();


echo $modelCompletBmw . PHP_EOL;
echo $modelCompletMercedes . PHP_EOL;