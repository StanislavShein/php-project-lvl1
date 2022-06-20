<?php

namespace Src\Games\Prime;

use function cli\line;
use function cli\prompt;

function playBrainPrime(string: $name)
{
    line('Answer "yes" if the number is prime. Otherwise answer "no".');
    $i = 0;
    do {
        $number = rand(2, 200);
        $rightAnswer = 'yes';
        for ($check = $number - 1; $check > 1; $check--) {
            if ($number % $check == 0) {
                $rightAnswer = 'no';
            }
        }
        line("Question: %s", $number);
        $answer = prompt('Your answer ');
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
