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
        return (new PhoneNumberValidator())->validate($this);
    }

    public function renderJson()
    {
        return (new JsonRenderer())->render($this);
    }
}

interface UserValidator
{
    public function validate(User $user);
}

interface UserRenderer
{
    public function render(User $user);
}

class PhoneNumberValidator implements UserValidator
{
    public function validate(User $user)
    {
        if (!is_int($user->getPhoneNumber())) {
            throw new Exception("The phone number seems to be invalid.");
        }

        return $user;
    }
}

class JsonRenderer implements UserRenderer
{
   public function render(User $user)
   {
       return json_encode([
           'userName' => $user->getUserName(),
           'fullName' => $user->getFullName(),
           'phoneNumber' => $user->getPhoneNumber(),
       ]);
   }
}