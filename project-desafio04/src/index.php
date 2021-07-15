<?php

require 'classes/Holder.php';
require 'classes/Account.php';
require 'classes/Cpf.php';

$cpf = new Cpf('123.456.789-0');

$holder = new Holder($cpf, 'Gustavo Santos Melo');

$account = new Account($holder, 0);

var_dump($account);
