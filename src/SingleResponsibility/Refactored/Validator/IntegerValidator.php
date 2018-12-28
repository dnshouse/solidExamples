<?php

namespace Solid\SingleResponsibility\Refactored\Validator;


use Exception;

class IntegerValidator implements InputValidatorInterface
{
    /**
     * @param $input
     * @return bool
     * @throws Exception
     */
    public function validate($input)
    {
        if (!is_int($input)) {
            throw new Exception("The input value seems to be invalid.");
        }

        return true;
    }
}