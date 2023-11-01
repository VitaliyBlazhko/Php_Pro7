<?php

namespace App\Figures;

class Rectangle extends Figure
{

    public function __construct($color, protected int|float $width, protected int|float $height)
    {
        parent::__construct($color);
    }


    public function draw()
    {
        echo "<div class='figure' style='width:{$this->width}px; height:{$this->height}px; background-color:$this->color'></div>";
    }

    public function calculateArea():int|float
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter():int|float
    {
        return $this->height * 2 + $this->width * 2;
    }
}