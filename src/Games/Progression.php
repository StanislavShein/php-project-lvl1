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
        $progressionStart = rand(1, 50);
        $delta = rand(1, 10);
        $progressionLength = 10;
        for ($index = 0; $index < $progressionLength; $index++) {
            $progression[] = $progressionStart + $delta * $index;
        }

        $hiddenIndex = rand(0, $progressionLength - 1);
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";

        $question = implode(' ', $progression);
        $rightAnswer = (string) $rightAnswer;
        $gameData[] = ['question' => $question, 'rightAnswer' => $rightAnswer];
    }

    Engine\playGame(TASK, $gameData);
}
