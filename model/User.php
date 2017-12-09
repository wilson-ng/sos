<?php

class User
{
    const TYPE_CUSTOMER = 'customer';
    const TYPE_ADMIN = 'admin';

    private $username;
    private $password;
    private $type;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function isCustomer()
    {
        return 'customer' === $this->type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setAsCustomer()
    {
        $this->type = self::TYPE_CUSTOMER;

        return $this;
    }
}
