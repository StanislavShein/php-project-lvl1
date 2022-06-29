<?php

namespace Src\Games\GCD;

use Src\Engine;

use function cli\line;
use function cli\prompt;

function play()
{
    $name = Engine\showGreeting();
    line("Find the greatest common divisor of given numbers.");
    $i = 0;
    do {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $numbers = "$number1 $number2";
        line("Question: %s", $numbers);
        $number1 > $number2 ? $least = $number2 : $least = $number1;
        $rightAnswer = 1;
        for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
            $modulo1 = $number1 % $checkNumber;
            $modulo2 = $number2 % $checkNumber;
            if ($modulo1 == 0 && $modulo2 == 0) {
                $rightAnswer = $checkNumber;
                break;
            }
        }
        $rightAnswer = strval($rightAnswer);
        Engine\checkAnswer($rightAnswer, $i, $name);
    } while ($i < 3);
}
