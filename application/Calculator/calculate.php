<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Calculator\Calculator;


do {
    try {
        $number1 = readline("Enter first number: ");

        $number1 = is_numeric($number1) ? (float) $number1 : 0.0;

        $operation = readline("Enter operator: ");

        $number2 = readline("Enter second number: ");
        $number2 = is_numeric($number2) ? (float) $number2 : 0.0;

        $calculatorObj = new Calculator($number1, $number2, $operation);
        $result = $calculatorObj->resultReturn();

        echo "Result: $result\n";
        break;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
        $tryAgain = readline("Do you want to try again? (y/n): ");
    }
} while (strtolower($tryAgain) === 'y');

