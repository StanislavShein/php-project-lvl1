<?php

namespace Brain\Games\GCD;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Find the greatest common divisor of given numbers.';

function findGCD(int $number1, int $number2): string
{
    $least = min($number1, $number2);
    for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
        if ($number1 % $checkNumber === 0 && $number2 % $checkNumber === 0) {
            return (string) $checkNumber;
        }
    }

    return 1;
}

function play(): void
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $numbers = "$number1 $number2";
        $rightAnswer = findGCD($number1, $number2);
        $gameData[] = ['question' => $numbers, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
