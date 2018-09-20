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
        <li><a href="http://facebook.com" tarPOST="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" tarPOST="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" tarPOST="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" tarPOST="_blank"><img src="images/snp.png" alt=""></a></li>
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

    var_dump($_POST);

    echo '<h2> Info del usuario '.$_POST['userName'].'</h2>';

    echo '
    Bienvenido: '.$_POST['userName'].' se ha registrado con el email: '.$_POST['userMail'].' los datos que
    ingresaste son:
    Edad: '.$_POST['userAge'].', Telefono: '.$_POST['userPhone'].', SitioWeb: '.$_POST['userSite'].'
    Género: '.$_POST['userGender'].', Estado Civil: '.$_POST['userCivilStatus'].', Nacionalidad: '.$_POST['userCountry'].'
    Pasatiempos: {si no eligio ninguno que no aparezca}
    Comentarios: '.$_POST['userComments'].'';
    ?>
    

      
    <!--FOOTER-->
    <?php
    include 'footer.php';
    ?>
    <!--FOOTER-->
    


  </div>
  </body>
</html>
