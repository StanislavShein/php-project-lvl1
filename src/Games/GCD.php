<?php

namespace Brain\Games\GCD;

use Brain\Engine;

use function cli\line;
use function cli\prompt;

function play(int $numberOfRounds)
{
    $task = 'Find the greatest common divisor of given numbers.';
    $name = Engine\showGreeting($task);
    $i = 0;
    do {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $numbers = "$number1 $number2";
        line("Question: %s", $numbers);
        $least = min($number1, $number2);
        $rightAnswer = 1;
        for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
            $modulo1 = $number1 % $checkNumber;
            $modulo2 = $number2 % $checkNumber;
            if ($modulo1 == 0 && $modulo2 == 0) {
                $rightAnswer = $checkNumber;
                break;
            }
        }
        (string) $rightAnswer;
        Engine\checkAnswer($rightAnswer, $i, $name, $numberOfRounds);
    } while ($i < $numberOfRounds);
}
