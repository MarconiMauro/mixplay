<?php

namespace App; 

Class User
{
    /**
     * @var int
     */ 
    private $id;

    /** 
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var int
     */
    private $phone;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $company;

    
    /**
     * @param int $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return  $this;
    }
    public function getAddress()
    {
        return $this->address;
    }
}
