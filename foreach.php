<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_string($thing)) {
		echo $thing . " is a string.\n";
	} elseif (is_numeric($thing)) {
		echo $thing . " is numeric.\n";
	} elseif (is_null($thing)) {
		echo $thing . " is null.\n";
	} elseif (is_array($thing)) {
		var_dump($thing);
		foreach ($thing as $number) {
			if (is_integer($number)) {
				echo $number . " is an integer.\n";
			}
		}
	} elseif (is_bool($thing)) {
		var_dump($thing);
	} else {
		echo "I HAVE NO IDEA WHAT THIS IS.\n";
	}
};