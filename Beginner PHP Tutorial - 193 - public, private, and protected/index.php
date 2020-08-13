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
}

$alex = new BankAccount;
$alex->Withdraw(15);
$alex->DisplayBalance();
