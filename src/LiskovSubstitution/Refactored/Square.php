<?php

namespace Solid\LiskovSubstitution\Refactored;


use Exception;

class Square extends Rectangle
{
    /**
     * @param $value
     * @return $this
     * @throws Exception
     */
    public function setSquareHeight($value)
    {
        if ($value !== $this->width) {
            throw new Exception("You can not have square with different sides");
        }

        $this->setHeight($value);
        return $this;
    }
}