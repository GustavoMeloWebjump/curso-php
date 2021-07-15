<?php

class Account {
    private Holder $holder;
    private float $balance = 0;
    private static int $lenghtAccounts = 0;

    public function __construct(Holder $holder, float $balance = 0) {   
        $this->balance = $balance;
        self::$lenghtAccounts += 1;
        $this->holder = new Holder($holder->getCpf(), $holder->getName());
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

        if ($value < 0) {
            $value = 0 - $value;
        }

        if ($this->balance < $value) {
            return 'you cannot withdraw this value, because you do not have balance for this';
        }

        $result = $this->balance - $value;
        $this->balance -= $value;

        return $result;
    } 

    public function deposit (float $value) {
        if ($value <= 0) {
            return 'you need to inform a valid number';
        }

        return $this->balance += $value;
    }

    public function transfer (float $value, Account $user) {
        if ($value <= 0 && $this->balance < $value) {
            return 'please, insert a valid number';
        }

        $user->balance += $value;
        $this->balance -= $value;

        return 'transfered with success ';
    }
}
