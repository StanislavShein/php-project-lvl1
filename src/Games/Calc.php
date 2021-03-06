<?php

namespace Brain\Games\Calc;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

const TASK = 'What is the result of the expression?';

function findOperationResult(string $operation, int $number1, int $number2): int
{
    switch ($operation) {
        case '+':
            return ($number1 + $number2);
        case '-':
            return ($number1 - $number2);
        case '*':
            return ($number1 * $number2);
        default:
            throw new \Exception('Error!');
    }
}

function play(): void
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);

        $operations = ['+', '-', '*'];
        $operation = $operations[rand(0, 2)];

        $expression = "$number1 $operation $number2";
        $rightAnswer = (string) findOperationResult($operation, $number1, $number2);
        $gameData[] = ['question' => $expression, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
