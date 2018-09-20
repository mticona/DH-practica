<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!--HEADER-->
  <?php
    include 'header.php';
    include 'infoPeliculas.php';
  ?>
  <!--HEADER-->

  <body>

  <div class="contenedor-principal">

    <p class="centrar">
      <a href="index.html">
        <img id="logo" src= "<?= $logosource; ?>" alt="logo Digital Movies">
      </a>
    </p>

    <h1 class="centrar"> <?php echo $principaltitle; ?> </h1>

    <div id="redes">
      <ul>
        <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
      </ul>
    </div>

    <div>
      <ul>
        <?php
          foreach($generos as $key => $value){
            echo '<li><a href="'.$value.'">'.$key.'</a></li>';
        }
        ?>
      </ul>
    </div>
    <?php

    echo '<h2> Info de la Película '.$_GET['titulo'].'</h2>';
    //var_dump($arrayPelis);
    
    echo '<ul>';
    
    echo ' <li> La duración es: '.$arrayPelis[$_GET['titulo']]['duracion'].'<br>';
    echo 'El género es: '.$arrayPelis[$_GET['titulo']]['género'].'<br>';
    echo '</ul> <br>';

    ?>
    

      
    <!--FOOTER-->
    <?php
    include 'footer.php';
    ?>
    <!--FOOTER-->
    


  </div>
  </body>
</html>
