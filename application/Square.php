<?php

namespace App;

class Square extends Figure
{

    public function __construct($color, protected int|float $side)
    {
        parent::__construct($color);
    }
    public function calculateArea():int|float
    {
        return $this->side * $this->side;
    }
    public function calculatePerimeter():int|float
    {
        return $this->side * 4;
    }
    public function draw()
    {
        echo "<div class='figure' style='width:{$this->side}px; height:{$this->side}px; background-color:$this->color'></div>";
    }

}