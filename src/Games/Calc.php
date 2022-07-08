<?php

namespace Brain\Games\Calc;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

function findOperationResult(string $operation, int $number1, int $number2): string
{
    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
    }
    $result = (string) $result;
    return $result;
}

function play(): void
{
    $task = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $operationArray = ['+', '-', '*'];
        $operation = $operationArray[rand(0, 2)];
        $expression = "$number1 $operation $number2";
        $rightAnswer = findOperationResult($operation, $number1, $number2);
        $gameData[] = ['question' => $expression, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
