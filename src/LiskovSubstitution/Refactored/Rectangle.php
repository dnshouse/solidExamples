<?php

namespace Solid\LiskovSubstitution\Refactored;


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