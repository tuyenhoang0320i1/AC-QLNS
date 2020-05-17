<?php


class Employee
{
    protected $id;
    protected $lastname;
    protected $firstname;
    protected $birth;
    protected $address;
    protected $position;

    public function __construct($id, $lastname, $firstname, $birth, $address, $position)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birth = $birth;
        $this->address = $address;
        $this->position = $position;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getBirth()
    {
        return $this->birth;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPosition()
    {
        return $this->position;
    }


}