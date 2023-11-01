<?php

namespace App;

class Circle extends Figure
{

    public function __construct($color, protected int|float $radius)
    {
        parent::__construct($color);
    }

    public function draw()
    {
        echo "<div class='figure' style='width:{$this->radius}px; height:{$this->radius}px; background-color:{$this->color}; border-radius: 50%'></div>";
    }

    public function calculateArea():int|float
    {
        return M_PI * $this->radius * $this->radius;
    }

    public function calculatePerimeter():int|float
    {
        return 2 * M_PI * $this->radius;
    }
}