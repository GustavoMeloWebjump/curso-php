<?php
namespace Desafio\Models;

use Desafio\Exceptions\InvalidNameException;
use Desafio\Exceptions\InvalidToInsertCreditOrPriceException;

/**
 * @property-read string $name
 * @property-read float $credit
 */
class Customers {
    //attributes
    private string $name;
    private float $credit;
    

    private function nameValidator (string $name) {
        if(strlen($name) < 10) {
            throw new InvalidNameException($name);
            return;
        }

        $this->name = $name;
    }
    
    private function creditValidator (float $credit) {
        if ($credit <= 0) {
            throw new InvalidToInsertCreditOrPriceException();
            return;
        }

        $this->credit = $credit;
    }

    //constructor
    public function __construct(string $name, float $credit = 0)
    {
        $this->nameValidator($name);
        $this->creditValidator($credit);
    }

    //getters

    private function getName() : string {
        return $this->name;
    }

    private function getCredit(): string {
        return $this->credit;
    }

    public function __get(string $methodName)
    {
        $methodName =  'get'.ucfirst($methodName);

        return $this->$methodName();
    }

    //setters

    private function setName (string $name): void {
        $this->name = $name;
    }
    
    private function setCredit(float $credit): void
    {
        $this->credit = $credit;
    }

    public function __set(string $methodName, $value) {
        $methodName = 'set'.ucfirst($methodName);
        $this->$methodName($value);
    }

    public function __toString()
    {
        return "\nName: {$this->getName()} \n
                Credit: {$this->getCredit()} \n";
    }
}
