<?php

namespace Src\Games\GCD;

use function cli\line;
use function cli\prompt;

function playBrainGCD($name)
{
	line("Find the greatest common divisor of given numbers.");
	$i = 0;
	do {
		$number1 = rand(1,50);
		$number2 = rand(1,50);
		$numbers = "$number1 $number2";
		line("Question: %s", $numbers);
		$number1 > $number2 ? $least = $number2 : $least = $number1;
		$GCD = 1;
		for ($checkNumber = $least; $checkNumber > 1; $checkNumber--) {
			$modulo1 = $number1 % $checkNumber;
			$modulo2 = $number2 % $checkNumber;
			if ($modulo1 == 0 && $modulo2 == 0) {
				$GCD = $checkNumber;
			}
		}
		$answer = prompt('Your answer');
		if ($answer == $GCD) {
			line('Correct!');
			$i++;
		} else {
			print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$GCD}'. \n");
			line("Let's try again, %s!", $name);
			break;
		}
	} while ($i < 3);

	if ($i == 3) {
		line("Congratulations, %s!", $name);
	}

}
