<?php

namespace App\Figures;

abstract class Figure
{
    public function __construct(public $color){

    }

    abstract public function draw();
    abstract public function calculateArea();
    abstract public function calculatePerimeter();



}