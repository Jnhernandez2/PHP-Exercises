<?php

fwrite(STDOUT, "Choose a starting number: ");
$start = trim(fgets(STDIN));
fwrite(STDOUT, "Choose an ending number: ");
$end = trim(fgets(STDIN));
fwrite(STDOUT, "Choose an increment: ");
$increment = trim(fgets(STDIN));

if (is_numeric($start) && is_numeric($end)) {
	for ($i = $start; $i <= $end; $i += $increment) {
		echo $i . PHP_EOL;
	}
};

