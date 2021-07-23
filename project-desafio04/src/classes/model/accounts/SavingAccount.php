<?php

namespace Alura\Banco\Model\Accounts;

use Alura\Banco\Exceptions\InvalidBalanceException;
use Alura\Banco\Model\Account;
use Alura\Banco\Model\Holder;

class SavingAccount extends Account {
    public function __construct(Holder $holder)
    {   
        parent::__construct($holder);
    }

    protected function rateValue(): float
    {
        return 0.03;
    }
}
