<?php
class Contact {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;
    private $email;

    function setFirst($newFirst)
    {
        $this->firstname = $newFirst;
    }

    function getFirst()
    {
        return $this->firstname;
    }

    function setLast($newLast)
    {
        $this->lastname = $newLast;
    }

    function getLast()
    {
        return $this->lastname;
    }

    function setPhone($newPhone)
    {
        $this->phone = $newPhone;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setAddress($newAddress)
    {
        $this->address = $newAddress;
    }

    function getAddress()
    {
        return $this->address;
    }

    function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }

    function getEmail()
    {
        return $this->email;
    }
} ?>
