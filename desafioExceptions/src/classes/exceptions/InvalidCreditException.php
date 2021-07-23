<?php

namespace Desafio\Exceptions;

use Exception;

class InvalidCreditException extends Exception {
    public function __construct(float $carPrice, float $customerCredit)
    {
        parent::__construct("\n You cannot buy this car, you have only {$customerCredit} and the car costs {$carPrice} \n");
    }
}
