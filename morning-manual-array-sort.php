<?php 

$morningArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function manualSort($array) {
	for ($i = 0; $i < count($array) - 1; $i++) {
		for ($j = 0; $j < count($array) - 1; $j++) {
			if ($array[$j] > $array[$j+1]) {
				$tempSpot = $array[$j+1];
				$array[$j+1] = $array[$j];
				$array[$j] = $tempSpot;
			}

			
		}
		
		
	}
	
	return $array;
	
}

print_r(manualSort($morningArray));