<?php

function add($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.");
	} else {
		return $a + $b;
	}
}

function subtract($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.");
	} else {
		return $a - $b;
	} 
}

function multiply($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.");
	} else {
    	return $a * $b;
	}
}

function divide($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.");
	} else {
    	return $a / $b;
    }
}

function modulus($a, $b)
{
	if (!is_numeric($a)) {
		fwrite(STDERR, "$a should be a numeric value.");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "$b should be a numeric value.");
	} else {
		return $a % $b;
	}
}
// Add code to test your functions here

echo add(12, 15), PHP_EOL;
echo subtract(37, 15), PHP_EOL;
echo multiply(73, 25), PHP_EOL;
echo divide(36, 3), PHP_EOL;
echo modulus(25, 8), PHP_EOL;