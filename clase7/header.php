<head>
    <meta charset="utf-8">
    <?php
      $title = "Digital Movies - Tus películas favoritas";
      $principaltitle = "Peliculas del Mundo";
      $logosource = "images/logo.png";
      $peliculas = "Peliculas Disponibles";
      $logueado = false;
      $generos = [
        'Comedia' =>'comedia.php',
        'Terror' =>'terror.html',
        'Aventura'=>'aventura.html',
        'Romance'=>'romance.html',
        'Triller'=>'triller.html',
      ];
      include('infoPeliculas.php');
    ?>

    <title> <? echo $title; ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>