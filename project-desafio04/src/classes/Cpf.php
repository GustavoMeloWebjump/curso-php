<?php

class Cpf {
    // attributes
    private string $cpfNumber;

    //validators
    private function validateCpf (string $cpf) {
        if (strlen($cpf) < 10) {
            echo 'cpf number is invalid, please, insert a valid number ';
            exit();
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
