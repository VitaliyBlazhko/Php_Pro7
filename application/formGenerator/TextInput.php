<?php

namespace App\formGenerator;

class TextInput extends FormElement
{

    public function render(): string
    {
        return "<input type='text' name='{$this->name}' />";
    }
}