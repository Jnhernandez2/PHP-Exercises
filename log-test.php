<?php 

require 'log-class.php';

$logger = new Log();

echo $logger->info('This is an INFO message.') . PHP_EOL;
echo $logger->error('This is an ERROR message.') . PHP_EOL;