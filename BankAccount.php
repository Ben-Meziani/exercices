<?php

class BankAccount
{
    const TAX = 0.08;
    public $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber)
    {   
        $this->accountNumber = $accountNumber;
    }

    public static function getTax()
    {
        return static::$tax;
    }

    public function setBalance($balance)
{ if ($balance < 10000){
    throw new Exception("Tu es trop pauvre !!!!!");
}
    $this->balance = $balance;
}

public function getBalance()
{ 
    return $this->balance * 100;
}
}

$compteBancaireDeToufik = New BankAccount('12345678');
$compteBancaireDeToufik->setBalance(50000);
var_dump(BankAccount::TAX);