<?php

namespace App\formGenerator;

interface FormElementInterface
{
    public function render();
    public function validate();

}