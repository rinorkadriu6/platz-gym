<?php

class User
{
    private $id;
    private $fullname;
    private $date;
    private $gender;
    private $phone;
    private $address;
    private $email;
    private $password;


    function __construct($id, $fullname, $date, $gender, $phone, $address, $email, $password)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->date = $date;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
    }


    function getId()
    {
        return $this->id;
    }
    function getFullname()
    {
        return $this->fullname;
    }
    function getDate()
    {
        return $this->date;
    }
    function getGender()
    {
        return $this->gender;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getAddress()
    {
        return $this->address;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }
}

?>