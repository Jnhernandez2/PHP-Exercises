<?php

fwrite(STDOUT, "Choose a starting number. ");
$start = trim(fgets(STDIN));
fwrite(STDOUT, "Choose an ending number. ");
$end = trim(fgets(STDIN));

if (is_numeric($start) && is_numeric($end)) {
	for ($i = $start; $i <= $end; $i++) {
		echo $i . PHP_EOL;
		`say "$i"`;
	}
};

