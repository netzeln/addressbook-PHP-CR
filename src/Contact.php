<?php
class Contact {
    private $firstname;
    private $lastname;
    private $phone;
    private $street;
    private $city;
    private $state;
    private $email;

    function __construct($firstname, $lastname, $phone, $street, $city,
    $state, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->email = $email;
    }

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

    function setStreet($newStreet)
    {
        $this->street = $newStreet;
    }
    function getStreet()
    {
        return $this->street;
    }

    function setCity($newCity)
    {
        $this->city = $newCity;
    }
    function getCity()
    {
        return $this->city;
    }

    function setState($newState)
    {
        $this->state = $newState;
    }
    function getState()
    {
        return $this->city;
    }

    function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }
    function getEmail()
    {
        return $this->email;
    }

    function fullName()
    {
        return $this->firstname . " " . $this->lastname;
    }

} ?>
