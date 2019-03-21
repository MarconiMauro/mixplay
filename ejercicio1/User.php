<?php

Class User
{
    public $email;
    public $pass;
    public $remember = false;

    public function getEmail()
    {
       
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email= $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->pass;
    }

    public function setPassword(string $pass)
    {
        $this->pass = $pass;
        return $this;
    }

    public function remember()
    {
    
        $this->remember = true;
        return $this;
        
    }

    public function forget()
    {
        $this->remember = false;
        return $this;
    }

    public function isRemembered()
    {
        return $this->remember;
    }

}
