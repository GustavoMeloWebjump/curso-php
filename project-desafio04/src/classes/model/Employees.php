<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\Person;
use Alura\Banco\Model\Cpf;

abstract class Employees extends Person {
    //attributes
    protected float $salary;

    //constructor
    public function __construct(Cpf $cpf, string $name) {
        parent::__construct($cpf, $name);
    }

    // getters
    public function getSalary (): float {
        return $this->salary;
    }

    // setters
    public function setSalary (float $salary): void {
        $this->salary = $salary;
    }

    // methods
    abstract public function calcBonus ():float;
}
