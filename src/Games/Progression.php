<?php

namespace Src\Games\Progression;

use Src\Engine;

use function cli\line;
use function cli\prompt;

function play()
{
    Engine\showGreeting($name);
    line("What number is missing in the progression?");
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
        print_r("Question: ");
        foreach ($array as $number) {
            print_r("{$number} ");
        }
        print_r("\n");
        $rightAnswer = strval($rightAnswer);
        Engine\checkAnswer($rightAnswer, $i, $name);
    } while ($i < 3);
}
