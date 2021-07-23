<?php
namespace Desafio\Models;

use Desafio\Exceptions\InvalidCreditException;
use Desafio\Exceptions\InvalidToInsertCreditOrPriceException;
use Desafio\Models\Customers;

/**
 * @property-read string $model
 * @property-read string $color
 * @property-read float $km
 * @property-read float $price
 * @property-read Customers $customers;
 */
class Car {
    private string $model;
    private string $color;
    private float $km;
    private float $price = 0;
    private Customers $customers;

    public function validatePrice (float $price) {
        if ($price <= 0) {
            throw new InvalidToInsertCreditOrPriceException();
        } else {
            $this->price = $price;
        }
    }

    public function __construct(string $model, string $color, float $km, float $price) {
        $this->model = $model;
        $this->color = $color;
        $this->km = $km;
        $this->validatePrice($price);
    }

    private function getModel(): string {
        return $this->model;
    }

    private function getColor(): string {
        return $this->color;
    }

    private function getKm(): float{
        return $this->km;
    }

    private function getPrice(): float {
        return $this->price;
    }

    private function getCustomers(): string {
        return $this->customers;
    }

    private function setModel(string $model): void {
        $this->model = $model;
    }

    private function setColor(string $color): void {
        $this->color = $color;
    }
    
    private function setKm (float $km): void {
        $this->$km = $km;
    }

    private function setPrice(float $price): void {
        $this->price = $price;
    }

    private function setCustomer(Customers $customers): void {
        $this->customers = new Customers($customers->name, $customers->credit);
    }

    public function __get(string $methodName) {
        $methodName = 'get'.ucfirst($methodName);
        
        return $this->$methodName();
    }

    public function __set(string $methodName, $value){
        $methodName = 'set'.ucfirst($methodName);

        $this->$methodName($value);
    }

    public function buyACar (Customers $customers) {
        if ($this->getPrice() > $customers->credit) {
            throw new InvalidCreditException($this->getPrice(), $customers->credit);
        } else {
            $customers->credit = $customers->credit - $this->getPrice();
            $this->setPrice(0);
            $this->setCustomer($customers);
            echo 'buyed with success ';
        }
    }
}
