<?php

namespace Brain\Games\Calc;

use Brain\Engine;
use const Brain\Engine\NUMBER_OF_ROUNDS;

function play(): void
{
    $task = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $rightAnswer = 0;
        $operation = ['+', '-', '*'];
        $operationIndex = rand(0, 2);
        $expression = "$number1 $operation[$operationIndex] $number2";
        switch ($operation[$operationIndex]) {
            case '+':
                $rightAnswer = $number1 + $number2;
                break;
            case '-':
                $rightAnswer = $number1 - $number2;
                break;
            case '*':
                $rightAnswer = $number1 * $number2;
                break;
        }
        $rightAnswer = strval($rightAnswer);
        $gameData[] = ['question' => $expression, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}