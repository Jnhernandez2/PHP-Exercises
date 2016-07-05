<?php


$magicNumber = mt_rand(1,100);

fwrite(STDOUT, "Can you guess the magic number?\n");

$userGuess = fgets(STDIN);
$guessCount = 0;

while ($userGuess != $magicNumber) {
	$guessCount++;
	if ($userGuess > $magicNumber) {
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
};