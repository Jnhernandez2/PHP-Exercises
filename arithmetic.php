<?php

function add($a, $b)
{
	// if (!is_numeric($a)) {
	// 	fwrite(STDERR, "$a should be a numeric value.\n");
	// 	exit;
	// } elseif (!is_numeric($b)) {
	// 	fwrite(STDERR, "$b should be a numeric value.\n");
	// 	exit;
	// }
	throwErrorMessage($a, $b);

	return $a + $b;
}

function subtract($a, $b)
{
	// if (!is_numeric($a)) {
	// 	fwrite(STDERR, "$a should be a numeric value.\n");
	// 	exit;
	// } elseif (!is_numeric($b)) {
	// 	fwrite(STDERR, "$b should be a numeric value.\n");
	// 	exit;
	// }
	throwErrorMessage($a, $b);

	return $a - $b;
	 
}

function multiply($a, $b)
{
	// if (!is_numeric($a)) {
	// 	fwrite(STDERR, "$a should be a numeric value.\n");
	// 	exit;
	// } elseif (!is_numeric($b)) {
	// 	fwrite(STDERR, "$b should be a numeric value.\n");
	// 	exit;
	// }
	throwErrorMessage($a, $b);

    return $a * $b;
	
}

function divide($a, $b)
{
	// if (!is_numeric($a)) {
	// 	fwrite(STDERR, "$a should be a numeric value.\n");
	// 	exit;
	// } elseif (!is_numeric($b)) {
	// 	fwrite(STDERR, "$b should be a numeric value.\n");
	// 	exit;
	// }

	// if ($a == 0 || $b == 0) {
	// 	fwrite(STDERR, "You cannot divide by zero.\n");
	// }
	throwErrorMessage($a, $b);

    return $a / $b;
    
}

function modulus($a, $b)
{
	// if (!is_numeric($a)) {
	// 	fwrite(STDERR, "$a should be a numeric value.\n");
	// 	exit;
	// } elseif (!is_numeric($b)) {
	// 	fwrite(STDERR, "$b should be a numeric value.\n");
	// 	exit;
	// }
	throwErrorMessage($a, $b);
	
	return $a % $b;
	
}

function throwErrorMessage($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.\n");
		exit("Exiting Program\n");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.\n");
		exit("Exiting Program\n");
	}

	if ($a == 0 || $b == 0) {
		fwrite(STDERR, "You cannot divide by zero.\n");
		exit("Exiting Program\n");
	}
}

// Add code to test your functions here

echo add(13, 15), PHP_EOL;
echo subtract(37, 15), PHP_EOL;
echo multiply(73, 25), PHP_EOL;
echo divide(36, 3), PHP_EOL;
echo modulus(25, 8), PHP_EOL;