<?php

include('Connect_SQL.php');

$conexion = new Connect_SQL("movies_db", "root","root");

$myConexion = $conexion->conectar();

$query = $myConexion->query('SELECT * from movies');

?>s
