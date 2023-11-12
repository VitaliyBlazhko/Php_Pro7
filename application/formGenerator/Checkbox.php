<?php

namespace App\formGenerator;

class Checkbox extends FormElement
{


    public function render(): string
    {
        return "<input type='checkbox' name='{$this->name}' />";
    }
}