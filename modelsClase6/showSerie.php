<?php
namespace App;
require_once('autoload.php');

echo '<pre>';

$serie1 = new Serie('Samuray X', "hola");

var_dump($serie1);

$serie1->verTrailer();
