<?php

include('./autoload.php');

$Juana = new Alumne('Juana', 'Perez', 0101);
$Juan = new Alumne('Juan', 'Pereza', 0202);
$MyCurse = new Curso('MyCurse', 111, 4);
$MyCurse2 = new Curso('MyCurse2', 222, 5);


$Rosita = new ProfesoreAdjunte('Rosita', 'Rosa', 2020, 10);
$Mario = new ProfesoreTitular('Mario', 'Mar', 2121, 8);
$alumnes = array($Juana, $Juan);

$profesores = array($Rosita, $Mario);

$cursos = array($MyCurse, $MyCurse2);

$digitalManager= new DigitalHouseManager($alumnes, $profesores, $cursos);









 ?>
