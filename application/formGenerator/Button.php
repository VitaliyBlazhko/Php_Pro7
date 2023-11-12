<?php

namespace App\formGenerator;

class Button extends FormElement
{

    public function render(): string
    {
        return "<button type='submit' name='{$this->name}'>{$this->name}</button>";
    }

}