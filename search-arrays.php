<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

var_dump($names);
var_dump($compare);

fwrite(STDOUT, "Enter name to search in arrays: \n");
$needle = trim(fgets(STDIN));

function arrayQuery($needle, $names) {
	$result = array_search($needle, $names);
	var_dump($result);
	if ($result !== false) {
		return true;
	} else {
		return false;
	}
}

var_dump(arrayQuery($needle, $names));

function arrayCompare($names, $compare) {
	$compareArrays = array_intersect($names, $compare);
	var_dump($compareArrays);
	return count($compareArrays);
}

var_dump(arrayCompare($names, $compare));