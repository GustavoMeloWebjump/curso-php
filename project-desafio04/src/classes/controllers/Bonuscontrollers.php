<?php
namespace Alura\Banco\Controller;

use Alura\Banco\Model\Employees;

class BonusController 
{
    private float $allValueBonus = 0;

    public function addBonusEmployee(Employees $employee)
    {
        $this->allValueBonus += $employee->calcBonus();
    }

    public function getAllValueBonus (): float {
        return $this->allValueBonus;
    }
}
