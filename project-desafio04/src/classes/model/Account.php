<?php

namespace Alura\Banco\Model;

use Alura\Banco\Exceptions\InvalidBalanceException;
use InvalidArgumentException;

abstract class Account {
    protected Holder $holder;
    protected float $balance;
    protected static int $lenghtAccounts = 0;

    public function __construct(Holder $holder) {   
        $this->balance = 0;
        self::$lenghtAccounts += 1;
        $this->holder = new Holder($holder->getCpf(), $holder->getName(), $holder->getAddress());
    }

    public function __destruct() {
        echo "Account closed \n";
    }

    // getters

    public function getCpf (): string {
        return $this->cpf;
    }

    public function getName (): string {
        return $this->name;
    }

    public function getBalance (): float {
        return $this->balance;
    }

    public static function getLenghtAccounts ():int {
        return self::$lenghtAccounts;
    }


    // getters holders

    public function getHolderName () {
        return $this->holder->getName();
    }

    public function getHolderCpf () {
        return $this->holder->getCpf();
    }

    // setters

    public function setBalance (float $balance): void {
        $this->balance = $balance;
    }

    // functionalities 

    public function withdraw (float $value) {

        $withdrawValue = $value +($value * $this->rateValue());

        if ($value < 0) {
            $value = 0 - $value;
        }

        if ($this->balance < $withdrawValue) {
            throw new InvalidBalanceException($withdrawValue, $this->getBalance());
        }

        $result = $this->balance - $withdrawValue;
        $this->balance -= $withdrawValue;

        echo 'draw out with success';
        return $result;
    } 

    public function deposit (float $value) {
        if ($value <= 0) {
            throw new InvalidArgumentException('You need to insert a positive number ');
        }

        return $this->balance += $value;
    }

    abstract protected function rateValue (): float;
}
