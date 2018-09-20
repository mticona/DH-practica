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

    echo '<h2> Info del usuario '.$_GET['userName'].'</h2>';

    echo '
    Bienvenido: '.$_GET['userName'].' se ha registrado con el email: '.$_GET['userMail'].' los datos que
    ingresaste son:
    Edad: '.$_GET['userAge'].', Telefono: '.$_GET['userPhone'].', SitioWeb: '.$_GET['userSite'].'
    Género: '.$_GET['userGender'].', Estado Civil: '.$_GET['userName'].', Nacionalidad: '.$_GET['userName'].'
    Pasatiempos: {si no eligio ninguno que no aparezca}
    Comentarios: {comentarios}
    
    ';ame
    ?>
    

      
    <!--FOOTER-->
    <?php
    include 'footer.php';
    ?>
    <!--FOOTER-->
    


  </div>
  </body>
</html>
