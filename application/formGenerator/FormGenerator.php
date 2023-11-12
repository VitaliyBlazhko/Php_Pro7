<?php

namespace App\formGenerator;

class FormGenerator
{
    private array $elementsForm = [];

    public function addElement(FormElement $element): void
    {
        $this->elementsForm[] = $element;
    }

    public function generateForm(): void
    {
        $html = "<form method='post'>";
        foreach ($this->elementsForm as $element){
            $html .= $element->render();
        }
        $html .= "</form>";
        echo $html;
    }

    public function validateForm(): bool
    {
        foreach ($this->elementsForm as $element){
            if(!$element->validate()) {
                return false;
            }
        }
        return true;
    }
}