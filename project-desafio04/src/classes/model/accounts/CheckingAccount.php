<?php

use Alura\Banco\Exceptions\InvalidBalanceException;
use Alura\Banco\Model\Account;

class CheckingAccount extends Account {
    public function transfer (float $value, CheckingAccount $user) {
        if ($value <= 0 || $this->balance < $value) {
            throw new InvalidBalanceException($value ,$this->getBalance());
        }

        $user->balance += $value;
        $this->balance -= $value;

        return 'transfered with success ';
    }

    protected function rateValue(): float
    {
        return 0.05;
    }
}
