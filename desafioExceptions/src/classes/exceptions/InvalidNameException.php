<?php

namespace Desafio\Exceptions;

use DomainException;

class InvalidNameException extends DomainException {
    public function __construct(string $name)
    {
        parent::__construct("\nError to insert {$name} in field name, please insert a name that have more than 10 word \n");
    }
}
