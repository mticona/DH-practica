<!DOCTYPE html>

<?php

include ('dataPelicula.php');

$errorTitulo= '';
$errorRanking='';
$errorPremios='';
$errorLanzamiento = '';
$errorDuracion='';
$errorGenero='';
$errorPoster='';

//es aqui donde verificamos que se enviaron los datos

if( $_POST ){
  //aqui empiezo las validaciones

  //var_dump($_POST);

  $_POST['nombrePelicula']=trim( $_POST['nombrePelicula'] );


  if( empty($_POST['nombrePelicula']) ){
    $errorTitulo = 'Debe ingresar el titulo de la película';
  }else if( !ctype_alpha($_POST['nombrePelicula'][0]) ){
    $errorTitulo = 'No puede comenzar el título con un número';
  }else{
    foreach ($peliculas as $values) {
      if($values['title'] == $_POST['nombrePelicula']){
        $errorTitulo = 'El titulo esta repetido';
        break;
      }
    }
  }

  if( !empty($_POST['premios']) && is_numeric($_POST['premios'])===false) {
    $errorPremios = 'Debe ingresar un valor numérico';
  }else if( !empty($_POST['premios']) && $_POST['premios'] < 0){
      $errorPremios = 'El valor ingresado debe ser mayor o igual a cero';
  }

  if( !empty($_POST['premios']) && is_numeric($_POST['ranking'])===false) {
    $errorPremios = 'Debe ingresar un valor numérico';
  }else if( !empty($_POST['premios']) && $_POST['premios'] < 0){
    $errorPremios = 'El valor ingresado debe ser mayor o igual a cero';
  }else if(!empty($_POST['premios']) && !is_float($_POST['premios']) ){
    $errorPremios = 'El ranking debe ser decimal';
  }

  if( empty($_POST['duracion']) ){
    $errorDuracion = 'ingrese un valor';
  }else if ( is_numeric($_POST['duracion'])===false){
    $errorDuracion = 'ingrese un numero';
  }else if($_POST['duracion'] < 0){
    $errorDuracion = 'ingrese un numero y que sea mayor o igual a 0';
  }

//var_dump($_FILES);

//VALIDACION DE POSTER
if(empty($errorTitulo) || empty($errorDuracion ) || empty($errorLanzamiento) || empty($errorGenero) ){
  if( $_FILES['posterPelicula']['error'] === 0 ){
    //echo 'voy a mover el archivo';
    $ext = pathinfo($_FILES['posterPelicula']['name'], PATHINFO_EXTENSION);
    if( $ext == 'jpg' ||  $ext == 'png' ){
      move_uploaded_file($_FILES['posterPelicula']['tmp_name'], 'fotos/'.$_POST['nombrePelicula'].'.'.$ext);
    }else{
      $errorFoto = 'El Formato es inválido';
    }
  }
}

//SUBO NUEVA PELICULA





/*
  if( isset($_POST['genero'])===false){
    $errorGenero = 'Debe seleccionar el genero';
  }
  */


}
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/registro.css">
  <title> Registre una nueva Película </title>
</head>
<body>

  <div class="contenedor-principal">

    <p class="centrar">
      <a href="index.html">
        <img id="logo" src="images/logo.png" alt="logo Digital Movies">
      </a>
    </p>

    <h1 class="centrar">Registrar una nueva película en DM</h1>

        <form action="registrarPelicula.php" method="post" enctype="multipart/form-data">

            <label class="etiqueta" for="nombreDePelicula">Nombre de pelicula:</label>

            <input type="text" id="nombreDePelicula" name="nombrePelicula" placeholder="Ingrese el titulo dela pelicula" ><span> *</span>

              <span class="error">
                <?php echo $errorTitulo; ?>
              </span>

            <br><br>

            <label class="etiqueta" for="rankingPelicula">ingresa el ranking</label>
              <input  id="rankingPelicula" type="number" step="0.1" name="ranking">
              <span class="error">
                <?php echo $errorRanking; ?>
              </span>
            <br><br>

            <label class="etiqueta">Cantidad de Premios:</label>
            <input type="number"  name="premios">
              <span class="error">
                <?php echo $errorPremios; ?>
              </span>

            <br><br>

            <label class="etiqueta">Fecha de lanzamiento</label>

            <input type="date" name = "fechaLanzamiento"><span> *</span>

                <span class="error">
                  <?php echo $errorLanzamiento; ?>
                </span>

            <br><br>

            <label class="etiqueta" for="">Duracion de la pelicula</label>
            <input type="number"  placeholder="ingrese la duracion" name="duracion"><span> *</span>

            <br><br>

            <label class="etiqueta">seleccione un genero </label>
            <select required name="generoPelicula">

            <!-- <agregar foreach yarray -->
              <option>Seleccione un genero</option>

              <?php
               foreach ($arrayGenero as $value) {
                 echo '<option>'.$value.'</option>';
               }
               ?>

            </select> <span> *</span>

            <br><br>


            <label class="etiqueta" for="poster">Subi el poster de a pelicula:</label>
            <input type="file" id="poster" name="posterPelicula">
              <?php echo $errorPoster; ?>
            <br><br>

            <div class="centrar">
              <button type="reset">Borrar</button>
              <button type="submit">Registrar pelicula</button>
            </div>


        </form>
  </div>
</body>
</html>
