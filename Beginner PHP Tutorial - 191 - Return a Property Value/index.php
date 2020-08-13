<?php

class BankAccount{
    public $balance = 0;

    public function DisplayBalance() {
        echo $this->balance;        
    }

}

$alex = new BankAccount;
$alex->DisplayBalance();

?>