<?php

// TODO: Create your inspect() function here
function inspect($var) {
	$vartype = gettype($var);
	// if ($vartype == boolean) {
	// 	settype($var, boolean);
	// }

	if (is_array($var && empty($var))) {
		return "This $vartype has a value of EMPTY ARRAY.\n";
	} elseif ($var == '') {
		return "This $vartype has a value of EMPTY STRING.\n";
	} elseif (is_null($var)) {
		return "This $vartype has a value of NULL.\n";
	} elseif (is_int($var)) {
		return "This $vartype has a value of $var.\n";
	} elseif (is_bool($var)) {
		if ($var) {
			return "This $vartype has a value of TRUE.\n";
		} else {
			return "This $varytpe has a value of FALSE.\n";
		}
	// } elseif ($var == 0) {
	// 	return "This $vartype has a value of ZERO.\n";
	} else { 
		return "This $vartype has a value of $var.\n";
	}
};
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo '1 Inspecting $num1: ' . inspect($num1) . PHP_EOL;

echo '2 Inspecting $num2: ' . inspect($num2) . PHP_EOL;

echo '3 Inspecting $num3: ' . inspect($num3) . PHP_EOL;

echo '4 Inspecting $num4: ' . inspect($num4) . PHP_EOL;

echo '5 Inspecting $null: ' . inspect($null) . PHP_EOL;

echo '6 Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;

echo '7 Inspecting $bool2: ' . inspect($bool2) . PHP_EOL;

echo '8 Inspecting $string1: ' . inspect($string1) . PHP_EOL;

echo '9 Inspecting $string2: ' . inspect($string2); PHP_EOL;

echo '10 Inspecting $array1: ' . inspect($array1); PHP_EOL;

echo '11 Inspecting $array2: ' . inspect($array2); PHP_EOL;


