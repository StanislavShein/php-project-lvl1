<?php

namespace Brain\Games\Prime;

use Brain\Engine;
use const Brain\Engine\NUMBER_OF_ROUNDS;

function play(): void
{
    $task = 'Answer "yes" if the number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number = rand(2, 200);
        $rightAnswer = 'yes';
        for ($check = $number - 1; $check > 1; $check--) {
            if ($number % $check === 0) {
                $rightAnswer = 'no';
            }
        }
        $gameData[] = ['question' => $number, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
