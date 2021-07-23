<?php

namespace Alura\Banco\Model;
/**
 * @property-read string $city
 * @property-read string $district
 * @property-read string $street
 * @property-read string $number
 */

final class Address {
    // attributes
    private string $city;
    private string $district;
    private string $street;
    private string $number;

    //constructors
    public function __construct(string $city, string $district, string $street, string $number) {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    // getters
    public function getCity(): string {
        return $this->city;
    }

    public function getDistrict (): string {
        return $this->district;
    }

    public function getStreet(): string {
        return $this->street;
    }

    public function getNumber(): string {
        return $this->number;
    }

    // setters
    public function setCity (string $city): void {
        $this->city = $city;
    }

    public function setDistrict(string $district): void {
        $this->district = $district;
    }

    public function setStreet(string $street): void {
        $this->street = $street;
    }

    public function setNumber(string $number): void {
        $this->number = $number;
    }   

    public function __toString(): string 
    {
        return "{$this->getCity()}, {$this->getNumber()}, {$this->getDistrict()} ";
    }

    public function __get(string $name)
    {
        $method = 'get' . ucfirst($name);

        return $this->$method();
    }
}
