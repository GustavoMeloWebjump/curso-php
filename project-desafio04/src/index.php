<?php

use Alura\Banco\Exceptions\InvalidBalanceException;
use Alura\Banco\Model\Accounts\SavingAccount;
use Alura\Banco\Model\Address;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Holder;

require 'autoload.php';

$cpf = new Cpf('123.123.123-1');
$address = new Address('sp', 'sp', 'rua la', '123');
$holder = new Holder($cpf, 'Gustavo Santos', $address);
$savingAccount = new SavingAccount($holder);

try{
    $savingAccount->deposit(300);
    $savingAccount->withdraw(200);
} catch (InvalidBalanceException $err) {
    echo $err->getMessage();
} finally {
    echo 'Thanks for using our services, Alura Banking';
}
