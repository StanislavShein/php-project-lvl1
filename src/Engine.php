<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function showGreeting(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function checkAnswer(string $rightAnswer, int &$i, string $name, int $numberOfRounds)
{
    $answer = prompt('Your answer ');
    if ($answer === $rightAnswer) {
        line('Correct!');
        $i++;
    } else {
        print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\n");
        line("Let's try again, %s!", $name);
        $i = $numberOfRounds + 1;
    }
    if ($i === $numberOfRounds) {
        line("Congratulations, %s!", $name);
    }
}
