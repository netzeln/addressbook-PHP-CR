<?php
class Contact {
    private $firstname;
    private $lastname;
    private $phone;
    private $street;
    private $city;
    private $state;
    private $zipCode;
    private $email;

    function __construct($firstname, $lastname, $phone, $street, $city,
    $state, $zipCode, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode= $zipCode;
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
        return $this->state;
    }

    function setZipCode($newZipCode)
    {
        $this->zipCode = $newZipCode;
    }
    function getZipCode()
    {
        return $this->zipCode;
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

    function fullAddress()
    {
        return $this->street . ", "  . $this->city . ", " . $this->state . " " . $this->zipCode;
    }

    function saveContact()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function searchName($contacts, $search_term)
    {
        $search_results = array();
        $found = (strtoupper($search_term));
        $search_terms = explode(" ", $found);

        foreach($search_terms as $term){
            foreach($contacts as $contact){
                if (strpos(strtoupper($contact->fullName()), $term) !== false)
                {
                    array_push($search_results, $contact);
                }

            }
        }

        return $search_results;
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }

} ?>
