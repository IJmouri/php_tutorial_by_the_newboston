<?php

class BankAccount
{
    public $balance = 0;
    public $type = '';

    public function SetType($input){
        $this -> type = $input;
    }
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
$alex -> SetType('18-25');
$alex_saving -> Deposit(100);
echo $alex->type;
$alex -> DisplayBalance();
