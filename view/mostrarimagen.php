<!DOCTYPE html>
<html>
<head>
    <title>Galería de imágenes</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    text-align: center; /* Centrar el contenido horizontalmente */
  }

  h1 {
    margin-top: 10 px; /* Agregar un margen superior para separar el título del borde superior */
  }
</style>
</head>
<body>

<h1>Catálogo de libros</h1>


<!DOCTYPE html>
<html>
<head>




<!-- Tu contenido de imágenes y detalles de libros aquí -->

</body>
</html>

    <?php
    // Conexión a la base de datos
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = 'root';
    $dbName = 'obligatoriophp';

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    // Consulta para obtener las imágenes
   // $sql = "SELECT  titulo,i.id, i.imagen FROM imagenes i , libro l where l.id_libro = i.id_libro";
   
    $sql = "SELECT id, nombre, tipo,imagen, l.id_libro, l.titulo, l.estado from  imagenes i, libro l where i.id_libro = l.id_libro and i.borrado is  null ";

    $resultado = mysqli_query($conn, $sql);
   
   
   
   
  //    $sql = "SELECT *FROM imagenes";

   // $resultado = mysqli_query($conn, $sql);


echo '<div style="display: flex; flex-wrap: wrap; gap: 10px;">';

while ($fila = mysqli_fetch_assoc($resultado)) {
	  $estado = $fila['estado'];
    $titulo = $fila['titulo'];
    $id = $fila['id'];
    $nombreImagen = $fila['nombre'];
    $tipoImagen = $fila['tipo'];
    $contenidoImagen = $fila['imagen'];
    $idlibro = $fila['id_libro'];

    // Establecer el tamaño máximo de la imagen
    $maxWidth = 400; // Ancho máximo en píxeles
    $maxHeight = 300; // Alto máximo en píxeles

    // Obtener las dimensiones de la imagen
    $imageSize = getimagesizefromstring($contenidoImagen);
    $originalWidth = $imageSize[0];
    $originalHeight = $imageSize[1];

    // Calcular las nuevas dimensiones de la imagen manteniendo la proporción
    $ratio = min($maxWidth / $originalWidth, $maxHeight / $originalHeight);
    $newWidth = $originalWidth * $ratio;
    $newHeight = $originalHeight * $ratio;




    // Generar la etiqueta <img> con los datos de la imagen y el tamaño limitado
 echo '<img src="data:' . $tipoImagen . ';base64,
 ' . base64_encode($contenidoImagen) . '" alt="' . $nombreImagen . 
 '" style="max-width: ' . $newWidth . 'px; max-height: ' . $newHeight . 'px; margin-right: 10px; .">'; 
 
  echo '<strong>ID:</strong> '.$idlibro;
 echo '<strong>Tit.</strong> '.$titulo;
//  echo '<strong>Est.</strong> '.$estado;








//echo '<strong>Estado:</strong> ' . $estado;
//echo '<img src="data:' . $tipoImagen . ';base64,' . base64_encode($contenidoImagen) . '" alt="' . $nombreImagen . '" data-idlibro="' . $idlibro . '" style="max-width: ' . $newWidth . 'px; max-height: ' . $newHeight . 'px; margin-right: 10px;">';


}


echo '</div>';




    ?>
	
	
	
	
	

    <form action="../controller/filtrar_libros.php" method="POST" class="bold-text">
        <div style="position: absolute; top: 20px; left: 20px;">
            <label for="genero">Selecciona un género:</label>
            <select name="genero" id="genero">
			
			
			
			<?php
            // Conectar a la base de datos

            // Verificar la conexión
            if (!$conn) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            // Consulta para obtener géneros únicos
            $sql = "SELECT DISTINCT genero FROM libro";
            $resultado = mysqli_query($conn, $sql);

            // Crear opciones del combobox
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value='" . $fila["genero"] . "'>" . $fila["genero"] . "</option>";
            }
			
			
	
            // Cerrar conexión
            mysqli_close($conn);
			
			

            ?>
        </select>
<!DOCTYPE html>
<html>
<head>
<style>
  .bold-text {
    font-weight: bold;
  }
</style>
</head>
<body>

<input type="submit" value="Filtrar" class="bold-text">

</body>
</html>
    </form>
	
	
	
	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Título de tu página</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    
    .container {
      position: absolute;
      top: 10px;
      right: 10px;
    }
    
	
	
   .button {
    display: block;
    position: absolute;
    top: 10px; /* Ajusta la distancia desde la parte superior */
    right: -1000px; /* Ajusta la distancia desde la derecha */
    padding: 10px 20px;
      background-color: #4CAF50;

 color: white;
      text-decoration: none;
      border: none;
     text-decoration: none;
    border-radius: 5px;

 }







  </style>
</head>
<body>
  <div class="container">
    <a href="fportadas.php" class="button">Ir al Menú</a>
	
  </div>
</body>
</html>

