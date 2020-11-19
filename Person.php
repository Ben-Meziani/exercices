<?php

class Person
{
    public $first_name;
    public $last_name;
    public $age;
    protected static $totalCount = 0;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;

        static::$totalCount++;
    }

    public static function getTotalCount()
    {
        return static::$totalCount;
    }

    public function fullname()
    {
        return sprintf("%s %s", $this->first_name, $this->last_name);
    }

    public function getAge()
    {
        return $this->age *365;
    }

    public function setAge()
    {
        if($age > 0)
        {
            $this->age = $age;
        }
    }
}


$toufik = new Person('Toufik', 'Meziani', '32');
$ben = new Person('Ben', 'Meziani', '40');
