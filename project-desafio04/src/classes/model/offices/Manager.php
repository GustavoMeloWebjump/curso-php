<?php

namespace Alura\Banco\Model\Offices;

use Alura\Banco\Model\Employees;
use Alura\IFace\Authenticable;

class Manager extends Employees implements Authenticable {
    public function calcBonus(): float
    {
        return $this->salary * 1.1;
    }

    public static function Login (string $password): bool {
        return $password === '5123';
    }
}
