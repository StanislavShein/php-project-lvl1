<?php

namespace Brain\Games\Prime;

use Brain\Engine;

use function cli\line;
use function cli\prompt;

function play(int $numberOfRounds)
{
    $name = Engine\showGreeting();
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
        Engine\checkAnswer($rightAnswer, $i, $name, $numberOfRounds);
    } while ($i < $numberOfRounds);
}
