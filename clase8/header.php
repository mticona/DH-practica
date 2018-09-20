<header>
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
    <meta charset="utf-8">
    <title> <? echo $title; ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    
    <!--LOGO-->
    <p class="centrar">
      <a href="index.html">
        <img id="logo" src= "<?= $logosource; ?>" alt="logo Digital Movies">
      </a>
    </p>
    <!--LOGO-->
    <h1 class="centrar"> <?php echo $principaltitle; ?> </h1>
    <!--REDES-->
    <div id="redes">
      <ul>
        <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
      </ul>
    </div>
    <!--REDES-->

    <!--NAVEGATION-->
    <nav>
        <ul>
          <?php
            foreach($generos as $key => $value){
              echo '<li><a href="'.$value.'">'.$key.'</a></li>';
          }
          ?>
        </ul>
      </nav>
      <!--NAVEGATION-->
  </header>