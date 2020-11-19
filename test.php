<?php

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function favorite(Team $team)
    {
        $team->favorite();
    }
}

class Team
{
    private $name;
    private $nombreFans = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNombreFans()
    {
        return $this->nombreFans;
    }
    public function favorite()
    {
        $this->nombreFans++;
    }
}

class League
{
    private $name;
    private $teams;

    public function __construct($name)
    {
        $this->name = $name;
        $this->teams = [];
    }

    public function addTeam($teams)
    {
        $this->teams[] = $teams;
    }

    public function getTeamCount()
    {
        return count($this->teams);
    }
}
$toufik = new Person("Toufik");
$ben = new Person("ben");



$barcelone = new Team("Barcelona");
$realMadrid = new Team("Madrid");

$toufik->favorite($barcelone);
$ben->favorite($barcelone);
$ben->favorite($realMadrid);

echo $barcelone->getName() . ' a ' . $barcelone->getNombreFans() . ' fans ' . PHP_EOL;
echo $realMadrid->getName() . ' a ' . $realMadrid->getNombreFans() . ' fans ' . PHP_EOL;

$liga = new League("Liga");
$liga->addTeam($barcelone);
$liga->addTeam($realMadrid);

echo $liga->getTeamCount();
