<?php

include('autoLoad.php');

$titanic = new Movie('Titanic', 5, '2006-09-02');

$avatar = new Movie('Avatar', 3, '2010-02-01');

var_dump($titanic);

$var = '2006-09-02';


$monthToValidate = substr($var, 5, -3);
$yearToValidate = substr($var, 0, -6);
$dayToValidate = substr($var,-2);

var_dump($dayToValidate);
var_dump($monthToValidate);
var_dump($yearToValidate);
var_dump($titanic);