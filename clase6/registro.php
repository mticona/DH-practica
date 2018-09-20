<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/registro.css">
  <title>Formularios</title>
</head>
<body>

  <?php
  
  $errorNombre= '';
  $errorEdad= '';
  $errorEmail= '';
  $errorGenero= '';
  $errorNacionalidad = '';

  //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
  if($_POST){
    
    
    $_POST['userName'] = trim($_POST['userName']);
    

    if(empty($_POST['userName'])){
      $errorNombre = 'Debe ingresar un nombre';
    }else if( strlen( $_POST['userName'] )< 2){
      $errorNombre = 'El nombre tiene que tener al menos dos letras';
    }

    if(!is_numeric($_POST['userAge'])){
      $errorEdad = 'Debe ingresar su edad';
    }
    //else if( !$_POST['userAge']> 110 || $_POST['userAge']> 110 )

    if( empty( $_POST['userMail']) ){
      $errorEmail = 'Debe ingresar el Correo';
    }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
      $errorEmail = 'El Correo es inválido';
    }

    if(!isset($_POST['userGenero'])){
      $errorGenero = 'Debe seleccionar un género';
    }
    
  }

  ?>

  <div class="contenedor-principal">
    <?php var_dump($_POST);?>

    <p class="centrar">
      <a href="index.html">
        <img id="logo" src="images/logo.png" alt="logo Digital Movies">
      </a>
    </p>

    <h1 class="centrar">Registrate en Digital Movies</h1>
    <form action="registro.php" method="post">

      <label class="etiqueta" for="nombreDelUsuario">Nombre:</label>

        <input type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" required name="userName" value = <?php echo $_POST['userName']??'';?> <span> *</span>
        <?php echo $errorNombre; ?>

      <br><br>

      <label class="etiqueta" for="nombreDelUsuario">Edad:</label>
        <input  id="nombreDelUsuario" type="number" name="userAge" value = <?php echo $_POST['userAge']??'';?> min="18">
        <?php echo $errorEdad; ?>
      <br><br>

      <label class="etiqueta">Teléfono de contacto:</label>
      <input type="tel" placeholder="011-111-1111" name="userPhone" value = <?php echo $_POST['userPhone']??'';?>>

      <br><br>

      <label class="etiqueta">Email:</label>

      <input type="text" required name="userMail" value = <?php echo $_POST['userMail']??'';?>><span> *</span>
      <?php echo $errorEmail; ?>

      <br><br>

      <label class="etiqueta" for="">Sitio web:</label>
      <input type="text" required name="userSite" value = <?php echo $_POST['userSite']??'';?>>

      <br><br>

      <label class="etiqueta" for="">Contraseña</label>

      <input type="password" name="userPass" maxlength="8"> value = <?php echo $_POST['userPass']??'';?> <span> *</span>

      <br><br>

      <label class="etiqueta" for="avatar">Subi tu Avatar:</label>
      <input type="file" id="avatar" name="userPhoto">
      

      <br><br>

      <label class="etiqueta">Género</label>
        <label><input type="radio" name="userGender" value="m" <?php echo $_POST['userGender']==='m' ? 'checked':'';?> >Masculino</label>
        <label><input type="radio" name="userGender" value="f" <?php echo $_POST['userGender']==='f' ? 'checked':'';?> >Femenino</label>
        <?php echo $errorGenero; ?>

      <br><br>

      <label class="etiqueta">Estado Civil:</label>
        <label><input type="radio" name="userCivilStatus" value="soltero">Soltero</label>
        <label><input type="radio" name="userCivilStatus" value="casado">Casado</label>
        <label><input type="radio" name="userCivilStatus" value="viudo">Viudo</label>

      <br><br>

      <label class="etiqueta" for="">Pasatiempos</label>
        <label><input type="checkbox" name="userHobbies[]" value="pasear">Pasear</label>
        <label><input type="checkbox" name="userHobbies[]" value="tennis">Jugar al Tennis</label>
        <label><input type="checkbox" name="userHobbies[]" value="mate">Tomar mate</label>


      <br><br>

      <label class="etiqueta">Comentarios:</label>
      <textarea name="userComments" placeholder="Estoy comentando"></textarea>

      <br><br>

      <label class="etiqueta">Pais de Origen</label>
      <select name="userCountry">
        <option disabled>Seleccione un Pais</option>
        <option>Argentina</option>
        <option>Brasil</option>
        <option>Bolivia</option>
        <option>Colombia</option>
        <option>Chile</option>
        <option>Peru</option>
      </select>

      <br><br>
      <div class="centrar">
        <button type="reset">Borrar</button>
        <button type="submit">Registrate</button>
      </div>


    </form>
  </div>
</body>
</html> 