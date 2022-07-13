<?php

namespace Brain\Games\Even;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function play(): void
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number = rand(1, 20);
        $rightAnswer = isEven($number) ? 'yes' : 'no';
        $gameData[] = ['question' => $number, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
