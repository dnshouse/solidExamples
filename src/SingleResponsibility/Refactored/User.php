<?php

namespace Solid\SingleResponsibility\Refactored;


use Solid\SingleResponsibility\Refactored\Validator\UserValidator;
use Solid\SingleResponsibility\Refactored\Renderer\UserRenderer;
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

    /**
     * @param UserValidator $validator
     * @return $this
     * @throws Exception
     */
    public function validate(UserValidator $validator)
    {
        $validator->validate($this);
        return $this;
    }

    /**
     * @param UserRenderer $renderer
     * @return array
     */
    public function render(UserRenderer $renderer)
    {
        return $renderer->render($this);
    }
}
