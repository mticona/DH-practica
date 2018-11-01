<?php

include('conexion.php');
$movies = $query->fetchAll(PDO::FETCH_ASSOC);
$stmt = $myConexion->prepare("INSERT INTO movies (title, release_date, length, rating) VALUES (:titulo,:fecha,:duracion,:rating)");
if($_POST){
  $stmt->bindValue(':titulo', $_POST['titulo']);
  $stmt->bindValue(':duracion', $_POST['duracion']);
  $stmt->bindValue(':rating', $_POST['rating']);
  $date = $_POST['año'].$_POST['mes'].$_POST['dia'];
  $stmt->bindValue(':fecha', $date);
  $stmt->execute();
}


var_dump($_POST);
 ?>
<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia" method="post">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option name="dia" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes" method="post">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option name="mes" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="año" method="post">
                    <option value="" >Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option name="año" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
