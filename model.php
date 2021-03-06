<?php 

class Model {
	
	private $attributes = [];

	protected static $table;

	public function __set($name, $value) {

		$this->attributes[$name] = $value;

	}

	public function __get($name) {

		if (array_key_exists($name, $this->attributes)) {

			return $this->attributes[$name];

		} else {

			return null;

		}

	}

	public static function getTableName() {

		return static::$table;

	}

}

$shirly = new Model();
$shirly->favoriteFood = 'pizza';
$shirly->drives = 'mazda';
$shirly->loves = 'mom';
$shirly->age = 32;

echo $shirly->drives . PHP_EOL;
echo $shirly->age . PHP_EOL;
