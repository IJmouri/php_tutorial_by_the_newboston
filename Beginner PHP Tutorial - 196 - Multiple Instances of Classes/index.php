<?php

class BankAccount
{
    public $balance = 10.5;

    public function DisplayBalance()
    {
        echo $this->balance;
    }

    public function Withdraw($amount)
    {
        if ($this->balance < $amount) {
            echo 'Not enough money';
        }
        else{
            $this->balance = $this->balance - $amount;

        }
    }

    public function Deposit($amount) {
        $this -> balance = $this -> balance + $amount;
    }
}

$alex = new BankAccount;
$billy = new BankAccount;

$alex -> Deposit(100);
$billy -> Deposit(10);

$alex -> Withdraw(15);
$billy -> Withdraw(5);

$alex -> DisplayBalance();
$billy -> DisplayBalance();
