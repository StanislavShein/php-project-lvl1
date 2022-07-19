<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function playGame(string $task, array $gameData): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);

    foreach ($gameData as $round) {
        $question = $round['question'];
        $rightAnswer = $round['rightAnswer'];
        line("Question: {$question}");
        $answer = prompt("Your answer");

        if ($answer !== $rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line("Correct!");
    }

    line("Congratulations, %s!", $name);
}
