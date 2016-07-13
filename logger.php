<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
	$date = date('Y-m-d');
	$time = date('h:i:s');
	$dateFile = 'log-' . $date . '.log';
    $handle = fopen($dateFile, 'a');
    fwrite($handle, $date . " " . $time . " " . $logLevel . $message . PHP_EOL);
	fclose($handle);
}

logMessage("INFO: ", "This is an info message.");
logMessage("ERROR: ", "This is an info message.");


