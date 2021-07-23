<?php
namespace Alura\Banco\Model;

require 'classes/model/Person.php';

use Alura\Banco\Model\Address;
use Alura\Banco\Model\Person;
use Alura\Banco\Model\Cpf;

class Holder extends Person {

    private Address $address;

    // constructor

    public function __construct(Cpf $cpf, string $name, Address $address) {
        $this->address = new Address($address->getCity(),
            $address->getDistrict(),
            $address->getStreet(),
            $address->getNumber());
        parent::__construct($cpf, $name);
    }

    // getters
    public function getAddress (): Address {
        return $this->address;
    }
}
