<?php

namespace Alura\Banco\Controller;

use Alura\Banco\Model\Offices\Manager;

class Auth {
    public static function Auth (Manager $manager, string $password): bool {
        if ($manager->Login($password)) {
            echo "\nUser logged with success \n";
            return true;
        }

        echo "\nPassword incorrect \n";
        return false;
    }
}
