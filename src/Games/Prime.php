<?php

namespace Src\Games\Prime;

use Src\Engine;

use function cli\line;
use function cli\prompt;

function play()
{
    Engine\showGreeting($name);
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
        Engine\checkAnswer($rightAnswer, $i, $name);
    } while ($i < 3);
}
