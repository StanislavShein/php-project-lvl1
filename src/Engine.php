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
    $roundNumber = 0;
    foreach ($gameData as $round) {
        $question = $round['question'];
        $rightAnswer = $round['rightAnswer'];
        $answer = prompt("Question: {$question}\nYour answer");
        if ($answer === $rightAnswer) {
            line("Correct!");
            $roundNumber++;
            if ($roundNumber === 3) {
                line("Congratulations, %s!", $name);
            }
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $rightAnswer, $name);
            return;
        }
    }
    
}