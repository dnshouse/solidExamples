<?php

namespace Solid\LiskovSubstitution;


use Exception;

class Rectangle
{
    protected $width;
    protected $height;

    public function setWidth($value)
    {
        $this->width = $value;
        return $this;
    }

    public function setHeight($value)
    {
        $this->height = $value;
        return $this;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle
{
    public function setHeight($value)
    {
        if ($value !== $this->width) {
            throw new Exception("You can not have square with different sides");
        }

        $this->height = $value;
        return $this;
    }
}