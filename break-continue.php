<?php

foreach (range(1, 100) as $i) {
	if ($i % 2 != 0) {
		continue;
	}
	echo $i, PHP_EOL;
}

foreach (range(1, 100) as $i) {
	echo $i, PHP_EOL;
	if ($i == 10) {
		break;
	}
};