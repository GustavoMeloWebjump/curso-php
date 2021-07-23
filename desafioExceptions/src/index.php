<?php

use Desafio\Exceptions\InvalidCreditException;
use Desafio\Exceptions\InvalidNameException;
use Desafio\Exceptions\InvalidToInsertCreditOrPriceException;
use Desafio\Models\Car;
use Desafio\Models\Customers;

require 'autoload.php';

try {
    $client = new Customers('santos', 23000);
} catch (InvalidNameException | InvalidToInsertCreditOrPriceException $errorOfCreditOrPrice) {
    echo $errorOfCreditOrPrice->getMessage();
    return;
}

try {
    $car = new Car('Corsa', 'black', 0, 10);
} catch (InvalidToInsertCreditOrPriceException $errorOfPrice) {
    echo $errorOfPrice->getMessage();

    return;
}

try{
    $car->buyACar($client);
    var_dump($car);
    var_dump($client);
} catch (InvalidCreditException $error) {
    echo $error->getMessage();
} finally {
    echo PHP_EOL.'thanks for using or system'.PHP_EOL;
}

