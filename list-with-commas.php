<?php 

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$sillyThings = 'Poop, Farts, Germans, Alphabets, Unicorns, Voldemort';

function humanizePhysicists($string, $sort = false) {
	$arrayFromString = explode(', ', $string);
	if ($sort) {
		sort($arrayFromString);
	}
	$lastItem = array_pop($arrayFromString);
	array_push($arrayFromString, "and ");
	$incompleteString = implode(', ', $arrayFromString);
	$completeString = $incompleteString . $lastItem;
	return $completeString;
}

$famousPhysicists = humanizePhysicists($famousFakePhysicists, true);

echo "Some of the most famous fictional theoretical physicists are $famousPhysicists.\n";

//echo "Some of the most random things I could think of in a matter of 10 seconds are $famousPhysicists.\n";