<?php

class Policier extends Person
{
    private $grade;

    public function __construct($first_name, $last_name, $age, $grade)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->grade = $grade;

        static::$totalCount++;
    }
    public function fullname()
    {

        return parent::fullname() . ', policier';
    }
}
