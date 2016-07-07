<?php
function confirm($message) {
	fwrite(STDOUT, $message);
	$confrimation = trim(fgets(STDIN));
	if ($confrimation == '1') {
		return true;
	}

	return false;
}


//var_dump(confirm("Is there another subject you'd like to add? Enter '1' for yes, or enter 0 for no: "));die;

$subjects = [];

do {
	fwrite(STDOUT, "Please enter a subject: ");
	$name = fgets(STDIN);
	fwrite(STDOUT, "Please enter a grade: ");
	$grade= fgets(STDIN);
	$subjects[] = ['name' => $name, 'grade' => $grade];
} while (confirm("Is there another subject you'd like to add? Enter '1' for yes, or enter 0 for no: "));

//var_dump($subjects);
$actualGrade = [];
foreach ($subjects as $array) {
	$actualGrade[] = (int)$array['grade'];
}
//var_dump($actualGrade);


function calculateAverage($actualGrade) {
	$total = array_sum($actualGrade);
	//echo $total, PHP_EOL;
	$average = 0;
	$average = $total / count($actualGrade);
	return $average;
}	

$getAverage = calculateAverage($actualGrade);
echo "Student average is $getAverage\n";

if ($getAverage >= 80) {
	echo("You did great! You're an awesome student!\n");
} else {
	echo("Boo, you're terrible.\n");
};