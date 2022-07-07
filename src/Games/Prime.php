<?php

namespace Brain\Games\Prime;

use Brain\Engine;

use function cli\line;

function play(int $numberOfRounds)
{
    $task = 'Answer "yes" if the number is prime. Otherwise answer "no".';
    $name = Engine\showGreeting($task);
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
