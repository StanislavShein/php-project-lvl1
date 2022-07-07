<?php

namespace Brain\Games\Progression;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

function play(): void
{
    $task = 'What number is missing in the progression?';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progression = [];
        $progression[0] = rand(1, 50);
        $delta = rand(1, 10);
        $hiddenIndex = rand(0, 9);
        for ($index = 0; $index < 10; $index++) {
            $progression[] = intval($progression[$index]) + $delta;
        }
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";
        $progressionStr = implode(' ', $progression);
        $rightAnswer = strval($rightAnswer);
        $gameData[] = ['question' => $progressionStr, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
