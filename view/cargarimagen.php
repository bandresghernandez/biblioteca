

<!DOCTYPE html>
<html>
<head>
    <title>Cargar Imagen</title>
    <style>
	
		   body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      /* Add the background image here */
      background-image: url("fondo/portada2.avif");
      /* Set background size and other properties as needed */
      background-size: cover;
      background-repeat: no-repeat;
    }
		  h1 {
      text-align: center;
      color: black; /* Set the text color of the h1 element to white */
    }
	
	

	
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="file"],
        .form-group input[type="text"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
		
		
		<style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;a /* Color de fondo del cuerpo */
        }

        .container {
            background-color: #ffffff; /* Color de fondo del recuadro blanco */
            margin: 3px; /* Márgenes alrededor del contenedor */
            padding: 30px; /* Espacio interno dentro del contenedor */
            border-radius: 8px; /* Borde redondeado del contenedor */
        }

        /* Estilos adicionales para los elementos dentro del contenedor */
        h1 {
            margin-bottom: 20px; /* Espacio inferior para separar del formulario */
        }

        .form-group {
            margin-bottom: 15px; /* Espacio inferior entre los elementos del formulario */
        }
		  
      .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      font-size: 16px;
    }
		
    </style>
    </style>
</head>
<body>
    <div class="container">
        <h1>Cargar portada de libro</h1>
        <form action="cargarimagen.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagen">Seleccionar imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="id_libro">Código de libro:</label>
                <input type="text" id="id_libro" name="id_libro" required>
            </div>
              <input type="submit" value="Subir imagen" />
				  		 

  <div class="container">
    <a href="../view/fportadas.php" class="button">Ir al Menú </a>
  </div>
  
		  
				  
            </div>
        </form>
    </div>
</body>
</html>


<?php
// Conexión a la base de datos (Asegúrate de tener los detalles correctos de conexión)
$host = 'localhost';
$db = 'obligatoriophp';
$usuario = 'root';
$contraseña = 'root';

$conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $contraseña);





// Verifica si se ha enviado una imagen
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
  // Obtén la información del archivo
  $nombreArchivo = $_FILES['imagen']['name'];
  $tipoArchivo = $_FILES['imagen']['type'];
  $rutaTemporal = $_FILES['imagen']['tmp_name'];

  // Lee el contenido del archivo
  $contenidoArchivo = file_get_contents($rutaTemporal);



    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "obligatoriophp";

    // Crear una conexión
    $conn = mysqli_connect($servername, $username, $password, $database);
 $id_libro = $_POST['id_libro'];
  
  
	     // Preparar la consulta SQL para buscar el libro
 $sql = "SELECT id_libro from libro WHERE id_libro = '$id_libro'";

$resultado2 = mysqli_query($conn, $sql);




  // Verificar si se encontró algún resultado
     if ((mysqli_num_rows($resultado2) >0) ) {
  
  
  
  
  

    //$id_libro = $_POST['id_libro'];

    // Prepara la consulta para guardar la imagen y el código del libro en la base de datos
   // $sql = "INSERT INTO imagenes (nombre, tipo, imagen, id_libro) VALUES (?, ?, ?, '$codigo_libro')";
 //   $resultado = mysqli_query($conexion, $sql);
  $id_libro = $_POST['id_libro'];

  // Prepara la consulta para guardar la imagen en la base de datos
  $consulta = $conexion->prepare("INSERT INTO imagenes (nombre, tipo, imagen,id_libro ) VALUES (?, ?, ?,'$id_libro' )");
  
  
  
  

  // Vincula los parámetros de la consulta
  $consulta->bindParam(1, $nombreArchivo);
  $consulta->bindParam(2, $tipoArchivo);
  $consulta->bindParam(3, $contenidoArchivo, PDO::PARAM_LOB);

  // Ejecuta la consulta
  $consulta->execute();



  // Verifica si la imagen se guardó correctamente
  if ($consulta->rowCount() > 0) {
	echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>La imagen se ha guardado correctamente</p></div>";

  } else {
    echo "Error al guardar la imagen en la base de datos.";
	
  }
  

}

else {

    		        
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El Libro ingresado no esta registrado en la Base de Datos. Intente nuevamente</p></div>";


}


}

?>


