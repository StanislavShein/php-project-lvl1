<?php

namespace Src\Even;

use function cli\line;
use function cli\prompt;

function playEven()
{
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
	line("Hello, %s!", $name);
	line('Answer "yes" if the number is even, otherwise answer "no".');
	$i = 0;
	do {
		$number = rand(1,20);
		line("Question: %s" , $number);
		$answer = prompt('Your answer ');
		if ($answer === 'yes') {
			if ($number % 2 === 0) {
				line('Correct!');
				$i++;
			} else {
				line("'yes' is wrong answer ;(. Correct answer was 'no'");
				line("Let's try again, %s!", $name);
				break;
			}
		} elseif ($answer === 'no') {
			if ($number % 2 === 1) {
				line('Correct!');
				$i++;
			} else {
				line("'no' is a wrong answer ;(. Correct answer was 'yes'.");
				line("Let's try again, %s!", $name);
				break;
			}
		} else {
			line("Let's try again, %s!", $name);
			break;
		}
	} while ($i < 3);
	if ($i == 3) {
		line("Congratulations, %s!", $name);
	}
}
