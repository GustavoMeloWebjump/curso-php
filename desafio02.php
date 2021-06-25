<?php

// Digite um numero para saber a tabuada da mesma

$getNumberByInput = 0;

while($getNumberByInput === 0) {
    $getNumberByInput = intval(readline('Type a number: '));
}

for ($i = 1; $i <= 10; $i++) {
    $result = $getNumberByInput * $i;
    echo "| $getNumberByInput X $i = $result |\n";
}
