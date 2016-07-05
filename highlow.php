<?php


if ($argc == 3) {
	if ($argv[1] < $argv[2]) {
		if (is_numeric($argv[1])) {
			if (is_numeric($argv[2])) {

				$magicNumber = mt_rand($argv[1],$argv[2]);

				fwrite(STDOUT, "Can you guess the magic number?\n");

				$userGuess = fgets(STDIN);
				$guessCount = 1;

				while ($userGuess != $magicNumber) {
					
					$guessCount++;
					
					if ($userGuess < $argv[1]) {
						fwrite(STDOUT, "Your guess must be within the parameters.\n");
						fwrite(STDOUT, "Can you guess the magic number?\n");
						$userGuess = fgets(STDIN);
					} elseif ($userGuess > $argv[2]) {
						fwrite(STDOUT, "Your guess must be within the parameters.\n");
						fwrite(STDOUT, "Can you guess the magic number?\n");
						$userGuess = fgets(STDIN);
					} elseif ($userGuess > $magicNumber) {
						fwrite(STDOUT, "Too high! Lower!\n");
						fwrite(STDOUT, "Can you guess the magic number?\n");
						$userGuess = fgets(STDIN);
					} elseif ($userGuess < $magicNumber) {
						fwrite(STDOUT, "Too low! Higher!\n");
						fwrite(STDOUT, "Can you guess the magic number?\n");
						$userGuess = fgets(STDIN);
					} 
				}

				if ($userGuess == $magicNumber) {
					fwrite(STDOUT, "You got it! You must be magic!\n");
					if ($guessCount == 1) {
						fwrite(STDOUT, "It only took you " . $guessCount . " time!\n");
					} else {
						fwrite(STDOUT, "It only took you " . $guessCount . " times!\n");
					}
				}
			} else {
				echo("Your arguments need to be numeric. Try again.\n");
			}
		} else {
			echo("Your arguments need to be numeric. Try again.\n");
		}
	} else {
		echo("The first argument(minimum) must be less than the the second argument(maximum).\n");
	}
} else {
	echo("You need a total of three arguments. Only enter two after the file name.\n");
};