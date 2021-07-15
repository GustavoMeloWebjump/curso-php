<?php

class Holder {
    private Cpf $cpf;
    private string $name;

    //validator

    private function validateName (string $name) {
        if(strlen($name) < 8) {
            echo 'The username account must have more than seven words';
            return;
        }

        $this->name = $name;
    }

    // constructor

    public function __construct(Cpf $cpf, string $name) {
        $this->validateName($name);
        $this->cpf = new Cpf($cpf->getCpfNumber());
    }

    // getters

    public function getCpf (): Cpf {
        return $this->cpf;
    }

    public function getCpfValue (): string {
        return $this->cpf->getCpfNumber();
    }

    public function getName (): string {
        return $this->name;
    }

    // setters
    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }
}
