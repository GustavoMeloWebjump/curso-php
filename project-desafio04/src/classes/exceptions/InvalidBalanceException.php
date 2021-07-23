<?php

namespace Alura\Banco\Exceptions;

use DomainException;

class InvalidBalanceException extends DomainException {
    public function __construct(float $withdrawValue, float $currentValue) {
        $message = "You tried transfer {$withdrawValue} but you only have {$currentValue} \n Or you tried transfer a negative number \n";

        parent::__construct($message);
    }
}
