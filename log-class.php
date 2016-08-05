<?php

class Log
{
	private $filename;

	private $handle;

	private $date;

	private $time;

	public function setFilename() {

		if is_string($this->filename) {

			return $this->filename;
		}

	}

	public function __construct($prefix = 'log') {

		$this->date = date('Y-m-d');
		$this->time = date('h:i:s');
		$this->filename = $prefix . '-' . $this->date . '.log';
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message) {
	
	    fwrite($this->handle, $this->date . " " . $this->time . " " . $logLevel . $message . PHP_EOL);
		
	}

	public function info($message) {

		$this->logMessage('INFO: ', $message);
	}

	public function error($message) {

		$this->logMessage('ERROR: ', $message);
	}

	public function __destruct() {

		fclose($this->handle);
	}
}