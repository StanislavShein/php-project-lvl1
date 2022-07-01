<?php

namespace Brain\Games\Calc;

use Brain\Engine;

use function cli\line;
use function cli\prompt;

function play(int $numberOfRounds)
{
    $task = 'What is the result of the expression?';
    $name = Engine\showGreeting($task);
    $operation = ['+', '-', '*'];
    $i = 0;
    do {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $rightAnswer = 0;
        $operationIndex = rand(0, 2);
        $expression = "$number1 $operation[$operationIndex] $number2";
        line("Question: %s", $expression);
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
        Engine\checkAnswer($rightAnswer, $i, $name, $numberOfRounds);
    } while ($i < $numberOfRounds);
}
