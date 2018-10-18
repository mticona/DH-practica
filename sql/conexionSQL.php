<?php

include('Connect_SQL.php');

$conexion = new Connect_SQL("movies_db", "root","root");

$conexion->conectar();

var_dump($conexion);

?>
