<?php

namespace Src\Games\Even;

use Src\Engine;

use function cli\line;
use function cli\prompt;

function play()
{
    Engine\showGreeting($name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $i = 0;
    do {
        $number = rand(1, 20);
        line("Question: %s", $number);
        $number % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        Engine\checkAnswer($rightAnswer, $i, $name);
    } while ($i < 3);
}
