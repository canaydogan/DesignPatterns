<?php

require_once 'Boeing.php';
require_once 'Factory.php';

//Direk uretim
$aircraft = new \DesignPatters\Factory\Boeing();

$aircraft->model = '747-8';
$aircraft->passengers = 500;
$aircraft->cruisingSpeed = 917;

$aircraft->fly();

echo '<br />';

//Fabrika uzerinden uretim
$factory = \DesignPatters\Factory\Factory::create('Airbus a380');
$factory->fly();