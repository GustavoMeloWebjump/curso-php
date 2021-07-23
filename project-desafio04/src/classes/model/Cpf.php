<?php

namespace Alura\Banco\Model;

use InvalidArgumentException;

final class Cpf {
    // attributes
    private string $cpfNumber;

    //validators
    private function validateCpf (string $cpf) {
        if (strlen($cpf) < 10) {
            throw new InvalidArgumentException('cpf number is invalid, please, insert a valid number ' . PHP_EOL);
            
        }
        
        $truecpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{1}$/'
                ]
            ]
        );

        if(!$truecpf) {
            throw new InvalidArgumentException('CPF Invalid, please, insert a valid cpf');
        }

        $this->cpfNumber = $cpf;
    }

    // constructor
    public function __construct(string $cpf) {
        $this->validateCpf($cpf);
    }

    // getter
    public function getCpfNumber (): string {
        return $this->cpfNumber;
    }

    // setter
    public function setCpfNumber (string $cpfNumber): void {
        $this->cpfNumber = $cpfNumber;
    }
}
