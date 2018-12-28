<?php

namespace Solid\SingleResponsibility\Refactored\Validator;


use Solid\SingleResponsibility\Refactored\User;
use Exception;

class UserValidator
{
    /**
     * @var User
     */
    protected $user;

    protected $stringValidator;
    protected $integerValidator;

    public function __construct(StringValidator $stringValidator, IntegerValidator $integerValidator)
    {
        $this->stringValidator = $stringValidator;
        $this->integerValidator = $integerValidator;
    }

    /**
     * @param User $user
     * @return bool
     * @throws Exception
     */
    public function validate(User $user)
    {
        $this->user = $user;
        $this->validateUserName()->validateFullName()->validatePhoneNumber();
        return true;
    }

    /**
     * @return $this
     * @throws Exception
     */
    private function validateUserName()
    {
        $this->stringValidator->validate($this->user->getUserName());
        return $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    private function validateFullName()
    {
        $this->stringValidator->validate($this->user->getFullName());
        return $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    private function validatePhoneNumber()
    {
        $this->integerValidator->validate($this->user->getPhoneNumber());
        return $this;
    }
}