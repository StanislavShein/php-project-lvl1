<?php

namespace Brain\Games\GCD;

use Brain\Engine;

use function Brain\Games\GCD\findGCD as GCDFindGCD;

use const Brain\Engine\NUMBER_OF_ROUNDS;

function findGCD(int $number1, int $number2): string
{
    $least = min($number1, $number2);
    $result = 1;
    for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
        if ($number1 % $checkNumber === 0 && $number2 % $checkNumber === 0) {
            $result = $checkNumber;
            break;
        }
    }
    (string) $result;
    return $result;
}

function play(): void
{
    $task = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $numbers = "$number1 $number2";
        $rightAnswer = findGCD($number1, $number2);
        $gameData[] = ['question' => $numbers, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
