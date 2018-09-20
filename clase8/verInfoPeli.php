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

      <!--SEARCH luego pasar--> 
      <div class="centrar">  
        <form>
        
        </form>
      </div>
      <!--SEARCH-->

      <h2> <?php echo $peliculas; ?> </h2>

      <section class="contenedor-pelis">
          <article class="items">
            <?php
            
              echo '<h2> Info de la Película '.$_GET['titulo'].'</h2>';
            //var_dump($arrayPelis);
            
              echo '<ul>';
              
              echo ' <li> La duración es: '.$arrayPelis[$_GET['titulo']]['duracion'].'<br>';
              echo 'El género es: '.$arrayPelis[$_GET['titulo']]['género'].'<br>';
              echo '</ul> <br>';
            ?> 
          </article>
        <?php
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



