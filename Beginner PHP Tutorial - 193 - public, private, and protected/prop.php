<?php

class BankAccount
{
    public $balance = 10.5;

    public function DisplayBalance()
    {
        echo $this->balance;
    }

}

$alex = new BankAccount;
$alex->DisplayBalance();
