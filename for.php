<?php

// fwrite(STDOUT, "Choose a starting number: ");
// $start = trim(fgets(STDIN));
// fwrite(STDOUT, "Choose an ending number: ");
// $end = trim(fgets(STDIN));
// fwrite(STDOUT, "Choose an increment: ");
// $increment = trim(fgets(STDIN));

// if (is_numeric($start) && is_numeric($end)) {
// 	for ($i = $start; $i <= $end; $i += $increment) {
// 		echo $i . PHP_EOL;
// 		`say "$i"`;
// 	}
// };

for ($i = 99; $i > 0; $i--) {
	$oneDown = $i - 1;
	echo "$i bottles of beer on the wall, $i bottles of beer, take one down, pass it around, $oneDown bottles of beer on the wall.\n";
	`say "$i  bottles of beer on the wall,  $i  bottles of beer, take one down, pass it around, $oneDown bottles of beer on the wall."`;
};