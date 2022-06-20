<?php

namespace Src\Engine;

use Src\Games\Even;
use Src\Games\Calc;
use Src\Games\GCD;
use Src\Games\Progression;
use Src\Games\Prime;

use function cli\line;
use function cli\prompt;

function play($game)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    switch ($game) {
        case 'brain-even':
            Even\playBrainEven($name);
            break;
        case 'brain-calc':
            Calc\playBrainCalc($name);
            break;
        case 'brain-gcd':
            GCD\playBrainGCD($name);
            break;
        case 'brain-progression':
            Progression\playBrainProgression($name);
            break;
        case 'brain-prime':
            Prime\playBrainPrime($name);
    }
}
