<?php

namespace Solid\SingleResponsibility;

use Exception;

class User
{
    protected $userName;
    protected $fullName;
    protected $phoneNumber;

    public function __construct($userName, $fullName, $phoneNumber)
    {
        $this->userName = $userName;
        $this->fullName = $fullName;
        $this->phoneNumber = $phoneNumber;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function validatePhoneNumber()
    {
        if (!is_int($this->phoneNumber)) {
            throw new Exception("The phone number seems to be invalid.");
        }

        return $this;
    }

    public function renderJson()
    {
        return json_encode([
            'userName' => $this->userName,
            'fullName' => $this->fullName,
            'phoneNumber' => $this->phoneNumber,
        ]);
    }
}