<?php

namespace Brain\Games\Prime;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

function isPrime(int $number): bool
{
    if ($number === 1) {
        return false;
    }
    for ($check = 2; $check <= sqrt($number); $check++) {
        if ($number % $check === 0) {
            return false;
        }
    }
    return true;
}

function play(): void
{
    $task = 'Answer "yes" if the number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number = rand(1, 200);
        if (isPrime($number)) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        $gameData[] = ['question' => $number, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
