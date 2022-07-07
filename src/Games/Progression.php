<?php

namespace Brain\Games\Progression;

use Brain\Engine;
use const Brain\Engine\NUMBER_OF_ROUNDS;

function play():void
{
    $task = 'What number is missing in the progression?';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $array = [];
        $array[0] = rand(1, 50);
        $delta = rand(1, 10);
        $hiddenIndex = rand(0, 9);
        for ($index = 0; $index < 10; $index++) {
            $array[] = intval($array[$index]) + $delta;
        }
        $rightAnswer = $array[$hiddenIndex];
        $array[$hiddenIndex] = "..";
        $progression = implode(' ', $array);
        $rightAnswer = strval($rightAnswer);
        $gameData[] = ['question' => $progression, 'rightAnswer' => $rightAnswer];
    }
    Engine\playGame($task, $gameData);
}
