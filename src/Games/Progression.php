<?php

namespace Brain\Games\Progression;

use Brain\Engine;

use function cli\line;

function play(int $numberOfRounds)
{
    $task = 'What number is missing in the progression?';
    $name = Engine\showGreeting($task);
    $i = 0;
    do {
        $array = [];
        $array[0] = rand(1, 50);
        $delta = rand(1, 10);
        $hiddenIndex = rand(0, 9);
        for ($index = 0; $index < 10; $index++) {
            $array[] = $array[$index] + $delta;
        }
        $rightAnswer = $array[$hiddenIndex];
        $array[$hiddenIndex] = "..";
        $progression = implode(' ', $array);
        line("Question: %s", $progression);
        $rightAnswer = strval($rightAnswer);
        Engine\checkAnswer($rightAnswer, $i, $name, $numberOfRounds);
    } while ($i < $numberOfRounds);
}
