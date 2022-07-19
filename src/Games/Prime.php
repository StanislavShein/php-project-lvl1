<?php

namespace Brain\Games\Prime;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Answer "yes" if the number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number === 1) {
        return false;
    }

    if ($number === 2 || $number === 3) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    for ($check = 3; $check <= sqrt($number); $check+=2) {
        if ($number % $check === 0) {
            return false;
        }
    }

    return true;
}

function play(): void
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number = rand(1, 200);
        $rightAnswer = isPrime($number) ? 'yes' : 'no';
        $gameData[] = ['question' => $number, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
