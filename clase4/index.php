<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!--HEADER-->
  <?php
    include 'header.php';
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


      <h2> <?php echo $peliculas; ?> </h2>

    <div class="contenedor-pelis">
      <?php
        foreach($arrayPelis as $key =>$value){
      ?>
      <div class="items">
        <img class="poster" src="<?php echo $value['poster'] ?> " alt="">
        <div class="detalle">
          <label> <?php echo $key." ".$value['release_date']; ?> </label>
          <label>Acción</label>
          <label>Duración: <?php echo $value['duracion']; ?> </label>
          <label>Rating: 5</label>
          <label> 
            <img class="ranking" src="images/star.png" alt=""> </label>
            <img class="ranking" src="images/starblack.png" alt=""> </label>
            
            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <?php
      }
      ?>

    </div>



    <div id="piePagina">
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        
        <?php 
          if($logueado){
          ?>  
            <li><a href="perfil.html">Mi Perfil</a></li>);
            <?php
            } else{
            ?>
            <li><a href="login.html">Login</a></li>
            <li><a href="registro.html">Registrate</a></li> 
          <?php 
          }
          ?>
        
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>


  </div>
  </body>
</html>
