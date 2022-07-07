<?php

namespace Brain\Games\Even;

use Brain\Engine;
use const Brain\Engine\NUMBER_OF_ROUNDS;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function play(): void
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number = rand(1, 20);
        $rightAnswer = isEven($number) ? 'yes' : 'no';
        $gameData[] = ['question' => $number, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}