<?php

namespace Desafio\Exceptions;

use DomainException;

class InvalidToInsertCreditOrPriceException extends DomainException {
    public function __construct() {
        parent::__construct("\nErro to insert a valid number, than sure to insert only positive numbers \n");
    }
}
