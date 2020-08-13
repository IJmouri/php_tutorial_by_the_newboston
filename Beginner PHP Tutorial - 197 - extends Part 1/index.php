<?php

class BankAccount
{
    public $balance = 0;

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

class SavingsAccount extends BankAccount
{
    
}

$alex_saving = new SavingsAccount;
$alex = new BankAccount;

$alex -> Deposit(100);
$alex_saving -> Deposit(100);

$alex -> DisplayBalance();
