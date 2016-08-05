<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangleOne = new Rectangle(12, 45);
echo $rectangleOne->area() . PHP_EOL;
echo $rectangleOne->perimeter() . PHP_EOL;

$rectangleTwo = new Rectangle(34, 22);
echo $rectangleTwo->area() . PHP_EOL;

$rectangleThree = new Rectangle(68, 83);
echo $rectangleThree->area() . PHP_EOL;

$squareOne = new Square(45);
echo $squareOne->area() . PHP_EOL;
echo $squareOne->perimeter() . PHP_EOL;