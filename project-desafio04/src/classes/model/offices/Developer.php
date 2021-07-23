<?php
namespace Alura\Banco\Model\Offices;

use Alura\Banco\Model\Employees;

class Developer extends Employees
{

    public function increaseSalary ():void {
        $this->salary = $this->salary * 0.75;
    }

    public function calcBonus(): float
    {
        return $this->salary * 0.10;
    }
}
