<?php

require_once 'car.php';
require_once 'motorcycle.php';
require_once 'truck.php';


$car = new parking\car();
$motorcycle = new parking\motorcycle();
$truck = new parking\pro\truck();


var_dump($car);
var_dump($motorcycle);
var_dump($truck);