<?php 

$names = ["Ashley", "Steve", "Brian", "Shirley"];

echo("The array is " . count($names) . " elements long.\n");

for ($i = 0; $i < count($names); $i++) {
    echo("The name at " . $i . " is " . $names[$i] . "\n");
};

echo("The first name is " . $names[0] . ".\n");

echo("The second name is " . $names[1] . ".\n");

echo("The third name is " . $names[2] . ".\n");

echo("The fourth name is " . $names[3] . ".\n");