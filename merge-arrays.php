<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

var_dump($names);
var_dump($compare);

// fwrite(STDOUT, "Enter name to search in arrays: \n");
// $needle = trim(fgets(STDIN));

// function arrayQuery($needle, $names) {
// 	$result = array_search($needle, $names);
// 	var_dump($result);
// 	if ($result !== false) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// var_dump(arrayQuery($needle, $names));

// function arrayCompare($array1, $array2) {
// 	$compareArrays = array_intersect($array1, $array2);
// 	var_dump($compareArrays);
// 	return count($compareArrays);
// }

// var_dump(arrayCompare($names, $compare));

function combineArrays($array1, $array2) {
	$comboArray = [];
	// foreach ($array1 as $value) {
	// 	if (in_array($value, $array2) == false) {
	// 		array_push($comboArray, $array1);
	// 		foreach ($array2 as $value) {
	// 			if (in_array($value, $array1) == false) {
	// 				array_push($comboArray, $array2);
	// 			}
	// 		}
	// 	}
		
	// }
	for ($i = 0; $i < count($array1); $i++) {
		if ($array1[$i] == $array2[$i]) {
			array_push($comboArray, $array1[$i]);
		} else {
			array_push($comboArray, $array1[$i]);
			array_push($comboArray, $array2[$i]);
		}		
	}
	return $comboArray;
}

print_r(combineArrays($names, $compare));

