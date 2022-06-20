<?php

namespace Src\Games\Even;

use function cli\line;
use function cli\prompt;

function playBrainEven($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $i = 0;
    do {
        $number = rand(1, 20);
        line("Question: %s", $number);
        $answer = prompt('Your answer ');
        $number % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        if ($answer === $rightAnswer) {
            line('Correct!');
            $i++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\n");
            line("Let's try again, %s!", $name);
            break;
        }
    } while ($i < 3);

    if ($i == 3) {
        line("Congratulations, %s!", $name);
    }
}
