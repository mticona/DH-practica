<!--crlt shift R-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  

  <body>
    <main class="contenedor-principal">
      <!--HEADER-->
      <?php
          include 'header.php';
        ?>
      <!--HEADER-->

      <!--SEARCH-->
      <div class="centrar">  
        <form>
        
        </form>
      </div>
      <!--SEARCH-->

      <h2> <?php echo $peliculas; ?> </h2>

      <section class="contenedor-pelis">
        <?php
          foreach($arrayPelis as $key =>$value){
        ?>
          <article class="items">
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
                <?php
                echo '<a href="verInfoPeli.php?titulo='.$key.'"> Ver Info de la Peli </a>';
                ?>
            </div>
          </article>
        
        <?php
        
        }
        ?>

      </section>

      <!--FOOTER-->
      <?php
        include 'footer.php';
      ?>
      <!--FOOTER-->

    </main>

    
  </body>

</html>
