<?php


class Calculator
{
    public int|float $a;
    public int|float $b;
    public string $operation;

    public function __construct($a, $b, $operation)
    {
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
    }

    public function resultReturn(): int|float
    {
        switch ($this->operation) {
            case '+':
                return $this->sum($this->a, $this->b);
            case '-':
                return $this->subtraction($this->a, $this->b);
            case '*':
                return $this->multiplication($this->a, $this->b);
            case '/':
                return $this->division($this->a, $this->b);
            default:
                throw new Exception("Your operator is invalid");
        }
    }

    public function sum($a, $b): int|float
    {
        return $a + $b;
    }

    public function subtraction($a, $b): int|float
    {
        return $a - $b;
    }

    public function multiplication($a, $b): int|float
    {
        return $a * $b;
    }

    public function division($a, $b): int|float
    {
        if ($b !== 0 && $b !== 0.0) {
            return $a / $b;

        }
        else{
            throw new Exception("You can't divide by 0");
        }

    }

}