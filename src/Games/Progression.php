<?php

namespace Brain\Games\Progression;

use Brain\Engine;

use const Brain\Engine\NUMBER_OF_ROUNDS;

const TASK = 'What number is missing in the progression?';

function play(): void
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progression = [];
        $progression[0] = rand(1, 50);
        $delta = rand(1, 10);
        for ($index = 0; $index < 10; $index++) {
            $progression[] = (int) $progression[$index] + $delta;
        }

        $hiddenIndex = rand(0, 9);
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";

        $progressionStr = implode(' ', $progression);
        $rightAnswer = (string) $rightAnswer;
        $gameData[] = ['question' => $progressionStr, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
