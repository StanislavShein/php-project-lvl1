<?php

namespace Brain\Games\Even;

use Brain\Engine;

use function cli\line;
use function cli\prompt;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function play(int $numberOfRounds)
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = Engine\showGreeting($task);
    $i = 0;
    do {
        $number = rand(1, 20);
        line("Question: %s", $number);
        $rightAnswer = isEven($number) ? 'yes' : 'no';
        Engine\checkAnswer($rightAnswer, $i, $name, $numberOfRounds);
    } while ($i < $numberOfRounds);
}
