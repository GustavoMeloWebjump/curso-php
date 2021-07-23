<?php

use Desafio\Exceptions\InvalidCreditException;
use Desafio\Exceptions\InvalidNameException;
use Desafio\Exceptions\InvalidToInsertCreditOrPriceException;
use Desafio\Models\Car;
use Desafio\Models\Customers;

require 'autoload.php';

try {
    $client = new Customers('gustavo santos', 23000);
} catch (InvalidNameException | InvalidToInsertCreditOrPriceException $errorOfCreditOrPrice) {
    $errorOfCreditOrPrice->getMessage();
}

try {
    $car = new Car('Corsa', 'black', 0, 16304);
} catch (InvalidToInsertCreditOrPriceException $errorOfPrice) {
    $errorOfPrice->getMessage();
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

