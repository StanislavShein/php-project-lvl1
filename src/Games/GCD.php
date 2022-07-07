<?php

namespace Brain\Games\GCD;

use Brain\Engine;
use const Brain\Engine\NUMBER_OF_ROUNDS;

function play(): void
{
    $task = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $numbers = "$number1 $number2";
        $least = min($number1, $number2);
        $rightAnswer = 1;
        for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
            $modulo1 = $number1 % $checkNumber;
            $modulo2 = $number2 % $checkNumber;
            if ($modulo1 === 0 && $modulo2 === 0) {
                $rightAnswer = $checkNumber;
                break;
            }
        }
        $rightAnswer = (string) $rightAnswer;
        $gameData[] = ['question' => $numbers, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
