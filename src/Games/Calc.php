<?php

namespace Src\Games\Calc;

use function cli\line;
use function cli\prompt;

function playBrainCalc(string $name)
{
    $operation = ['+', '-', '*'];
    line("What is the result of the expression?");
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
        $answer = prompt('Your answer');
        if ($answer == intval($rightAnswer)) {
            line('Correct!');
            $i++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'. \n");
            line("Let's try again, %s!", $name);
            break;
        }
    } while ($i < 3);

    if ($i == 3) {
        line("Congratulations, %s!", $name);
    }
}
