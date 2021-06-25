<?php

// Descubra o seu IMC

$altura = 0;
$peso = 0;

while ($altura === 0 || $altura === 0.0) {
    $altura = floatval(readline('Digite a sua altura: '));
}

while($peso === 0 || $peso === 0.0) {
    $peso = floatval(readline('Digite a sua peso: '));
}

$resultado = $peso / ($altura ** 2);

echo 'Segundo os calculos do seu IMC, voce esta: ';

if ($resultado < 18.5) {
    echo 'Magro(a)';
} else if ($resultado >= 18.5 && $resultado < 24.9) {
    echo 'Normal';
} else if ($resultado > 24.9 && $resultado < 30) {
    echo 'Sobrepeso';
} else {
    echo 'Obesidade';
}
