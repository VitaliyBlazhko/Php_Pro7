<?php

namespace App\formGenerator;


abstract class FormElement implements FormElementInterface
{
    public function __construct(
        protected string $name,
        protected bool   $isRequired = false,
    )
    {}

    abstract public function render();


    public function validate(): bool
    {
        if($this->isRequired && empty($_POST[$this->name])){
            return false;
        }
        return true;
    }
}