<?php 

for ($i = 0; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FIZZBUZZ\n";
	} elseif ($i % 3 == 0) {
		echo "FIZZ\n";
	} elseif ($i % 5 == 0) {
		echo "BUZZ\n";
	}else {
		echo $i . PHP_EOL;
	}
};