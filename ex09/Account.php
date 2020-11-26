<?php

abstract class Account
{
//   Your code here

    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }

    public function pay(float $amountToPay)
    {
    if ($this->canPay($amountToPay)) {
        echo 'Paid ' .$amountToPay . ' using ' .get_called_class() . PHP_EOL;
    } else if ($this->successor) {
        $this->successor->pay($amountToPay);
        echo "Cannot pay using " . get_called_class() . " Proceeding .." . PHP_EOL;
    } else {
        echo 'None of the accounts have enough balance';
    }

    }


}

class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

class Paypal extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

class Bitcoin extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}