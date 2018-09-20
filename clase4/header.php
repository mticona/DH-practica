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
      $arrayPelis = [
        'Avatar' => [
          'poster' => 'images/avatar.jpg',
          'release_date'=> '(2002)',
          'nombre'=> 'avatar',
          'género' => 'Acción',
          'duracion' => 120,
        ],
        'Avengers' => [
          'poster' => 'images/avengers.jpg',
          'nombre'=> 'avengers',
          'release_date'=> '(May 2018)',
          'género' => 'Acción',
          'duracion' => 120,
        ],
        'Moana' => [
          'poster' => 'images/moana.jpg',
          'nombre'=> 'moana',
          'release_date'=> '(Mar 2016)',
          'género' => 'Animadas',
          'duracion' => 120,
        ],
        'Rogue One' => [
          'poster' => 'images/rogueone.jpg',
          'nombre'=> 'rogueone',
          'release_date'=> '(Dic 2017)',
          'género' => 'Acción',
          'duracion' => 120,
        ],
        'Titanic' => [
          'poster' => 'images/titanic.jpg',
          'nombre'=> 'rogueone',
          'release_date'=> '(Abr 1995)',
          'género' => 'Romance',
          'duracion' => 150,
        ],
        'Dragon Ball Z' => [
          'poster' => 'images/dragonball.jpg',
          'nombre'=> 'dragonball',
          'release_date'=> '(Jul 2005)',
          'género' => 'Animada',
          'duracion' => 140,
        ],
        'Emoji' => [
          'poster' => 'images/emoji.jpg',
          'nombre'=> 'emoji',
          'release_date'=> '(Oct 2016)',
          'género' => 'Animada',
          'duracion' => 110,
        ],
      ];
    ?>

    <title> <? echo $title; ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>