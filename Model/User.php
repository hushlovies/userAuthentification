<?php


class User
{

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $address;
    private $postalCode;
    private $city;
    private $country;
    public function __construct($data)
    {
        $this->hydrate($data);
    }
    //getId
    public function getId()
    {
        return $this->id;
    }
    //getsetEmail
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $email;
    }

    //getsetFirstname
    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setfirstName($firstName)
    {
        $this->firstName = $firstName;
        return $firstName;
    }

    //getsetpassword
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $password;
    }

    //getset lastName
    public function getlastName()
    {
        return $this->lastName;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
        return $lastName;
    }

    //getsetaddress
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $address;
    }
    //getsetPostalcode
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $postalCode;
    }

    //getset city
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $city;
    }
    //getset city
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $country;
    }


    //permet les donner et les attribuer a la classe user
    public function hydrate($data)
    {
        foreach ($data as $fieldName => $fieldValue) {
            $this->{('set' . ucwords($fieldName))}($fieldValue);
        }
    }
}
