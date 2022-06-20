<?php

namespace Src\Games\Progression;

use function cli\line;
use function cli\prompt;

function playBrainProgression(string $name)
{
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
        $answer = prompt('Your answer');
        if ($answer == $rightAnswer) {
            line('Correct!');
            $i++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'. \n");
            line("Let's try again, %s!", $name);
            break;
        }
    } while ($i < 3);

    if ($i == 3) {
        line("Congratulations, %s!", $name);
    }
}
