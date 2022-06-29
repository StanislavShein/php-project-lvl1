<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

function showGreeting() :string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function checkAnswer(string $rightAnswer, int &$i, string $name)
{
    $answer = prompt('Your answer ');
    if ($answer === $rightAnswer) {
        line('Correct!');
        $i++;
    } else {
        print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\n");
        line("Let's try again, %s!", $name);
        $i = 4;
    }
    if ($i == 3) {
        line("Congratulations, %s!", $name);
    }
}
