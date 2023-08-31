    <?php

/*Funcion para registrar un libro*/
function registar_libro($conn){

$id_libro = $_POST['id_libro'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$tomo = $_POST['tomo'];
$estado_d = $_POST['estado_d'];
$estado_conservacion = $_POST['estado_conservacion'];
$id_editorial = $_POST['id_editorial'];
$descripcion = $_POST['descripcion'];


$nombreErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id_libro = test_input($_POST["id_libro"])  ;
        // Validar que el codigo digitos
        if ((!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten digitos en el código del libro";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){
	   
	   
	     // Preparar la consulta SQL para buscar el libro
  $sql = "SELECT id_libro from libro WHERE id_libro = '$id_libro'";

   $resultado = mysqli_query($conn, $sql);

  // Ejecutar la consulta
//  $result = $conn->query($sql);

  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) == 0) {

// Preparar la consulta SQL

// Insertar los valores en la tabla libro
$sql = "INSERT INTO libro (id_libro,titulo, genero, tomo, estado, estado_conservacion, descripcion, id_editorial) 
        VALUES ('$id_libro','$titulo', '$genero', '$tomo', '$estado_d', '$estado_conservacion', '$descripcion', '$id_editorial')";


// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;'>";
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Libro registrado exitosamente.</p></div>";




} 

else {
 // echo "Error al registrar el nuevo Libro: " . $conn->error;
    echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Error al registrar el nuevo Libro $conn->error</p></div>";

}
}

else {
 // echo "El libro ingresado ya esta registrado en la base de datos " . $conn->error;
  
  echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El libro ingresado ya esta registrado en la base de datos</p></div>";

  
  
}
// Cerrar la conexión a la base de datos
$conn->close();


}
}

/*Funcion para registrar un socio*/


function registar_socio($conn){
// Obtener los datos del formulario
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$fecha_nac = $_POST['fecha_nac'];


$fijo = $_POST['fijo'];
$tipo = $_POST['tipo'];
$email = $_POST['email'];
$grupo = $_POST['grupo'];


$nombreErr = "";
// Formato en la fecha para camibiar orden de datos

$fecha_formateada = date('Y/m/d', strtotime($fecha_nac));
$digitosPermitidos = 8; // Cantidad de dígitos permitidos


// Controla que sean 8 digitos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  $ci = $_POST["ci"];
		$ci = test_input($_POST["ci"])  ;
		//if (!preg_match($digitosPermitidos, $ci)){
 if ((strlen($ci) <> $digitosPermitidos) ){
	      $nombreErr = "El campo CI debe tener exactamente $digitosPermitidos dígitos.";
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";
  } 
 }
 
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $nombre = test_input($_POST["nombre"]) or  $apellido = test_input($_POST["apellido"]) ;
        // Validar que el nombre, apellido y calle contenga solo letras y espacios
        if ((!preg_match("/^[a-zA-Z ]*$/", $nombre))  or (!preg_match("/^[a-zA-Z ]*$/", $apellido)) ){
            $nombreErr = "Solo se permiten letras y espacios en el nombre y apellido del socio, intente nuevamente";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

			
        }
    }
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
         $ci = test_input($_POST["ci"])    ;
        // Validar que el ci, numero y cel contenga solo numeros
        if ((!preg_match("/^[0-9]+$/", $ci))  ){
            $nombreErr = "Solo se permiten digitos en el campo CI";
			//echo  $nombreErr;
						        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }
	
	
	
	if (!empty($fijo)) {
        // Controla que sea un mail con formato correcto
    if ((!preg_match("/^[0-9]+$/", $fijo))  ){
            $nombreErr = "Solo se permiten digitos en el campo 	Teléfono";
						        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }
	
	
	

	if (!empty($email)) {
        // Controla que sea un mail con formato correcto
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $nombreErr = "Ingrese un email válido con formato: nombreusuario@dominio.com";
						        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }
	
	
	/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $email = test_input($_POST["email"]);
        // controla que sea un mail con formato correcto 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $nombreErr = "Ingrese mail valido con formato: nombreusuario@xxx.com";
		//	echo  $nombreErr;
			
			
			        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

			
			
        }
    }
	*/
	
  if ($nombreErr == "" ){

	   



  // Preparar la consulta SQL para buscar el socio
  $sql = "SELECT ci from socio WHERE ci = '$ci'";

   $resultado = mysqli_query($conn, $sql);


  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) == 0) {


// Preparar la consulta SQL para insertar el préstamo en la tabla retira
$sql1 = "INSERT INTO persona (ci, nombre, apellido,sexo, fecha_nac, fijo, email, grupo, tipo)
        VALUES ('$ci', '$nombre', '$apellido', '$sexo' , '$fecha_formateada', '$fijo', '$email', '$grupo', '$tipo' )";
		
	// Fecha actual para la inscripcion de socio
		$fecha_actual = date('Y/m/d');
		
	// Se ingresa la persona y socio
$sql2 = "INSERT INTO socio (ci, fecha_ins)
        VALUES ('$ci','$fecha_actual')";

// Ejecutar la consulta
if ($conn->query($sql1) === TRUE) {
 // echo "Persona registrada exitosamente.";
} 
if ($conn->query($sql2) === TRUE) {
  //echo "Socio registrado exitosamente.";
        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Socio registrado exitosamente</p></div>";

}
else {
 // echo "Error al registrar el nuevo SOCIO: " . $conn->error;
    echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Error al registrar el nuevo SOCIO $conn->error</p></div>";

}

}
else {
  //echo "El socio ingresado ya esta registrado en la Base de Datos " . $conn->error;
      echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El socio ingresado ya esta registrado en la Base de Datos</p></div>";

}
// Cerrar la conexión a la base de datos
$conn->close();



}
}

// Función para limpiar y validar los datos de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



/*Funcion para buscar  un libro por su codigo*/

function busquedaLibroCodigo($conn){

	// Obtener el ID del libro enviado desde el formulario
	if (isset($_POST['id_libro'])) {
  $id_libro = $_POST['id_libro'];
$nombreErr = "";


	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id_libro = test_input($_POST["id_libro"])  ;
        // controla que en los campos se ingrese digitos 
        if ((!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos en el código.";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){


  // Preparar la consulta SQL para buscar el libro por su ID
  $sql = "SELECT * from libro where  id_libro like  '%$id_libro%' and  borrado is null";


  $resultado = mysqli_query($conn, $sql);


  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) > 0) { 
 
 
   while ($libroEncontrado = $resultado->fetch_assoc()) {
      echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;'>";
      echo "<h3>ID: " . $libroEncontrado['id_libro'] . "</h3>";
      echo "<p><strong>Título:</strong> " . $libroEncontrado['titulo'] . "</p>";
      echo "<p><strong>Género:</strong> " . $libroEncontrado['genero'] . "</p>";
      echo "<p><strong>Tomo:</strong> " . $libroEncontrado['tomo'] . "</p>";
      echo "<p><strong>Estado:</strong> " . $libroEncontrado['estado'] . "</p>";
      echo "<p><strong>Estado de Conservación:</strong> " . $libroEncontrado['estado_conservacion'] . "</p>";
  	  

echo "<p><strong>ID Editorial:</strong> " . $libroEncontrado['id_editorial'] . "</p>";	  

	   echo "<p><strong>Descripción:</strong> " . $libroEncontrado['descripcion'] . "</p>";
	     // echo "<p><strong>Imagen:</strong> " . $libroEncontrado['imagen'] . "</p>";
      echo "</div>";
    }

 // Consulta para obtener las imágenes
    $sql = "SELECT * FROM imagenes  WHERE id_libro = $id_libro";
    $resultado = mysqli_query($conn, $sql);



    // Mostrar las imágenes'</div>';
while ($fila = mysqli_fetch_assoc($resultado)) {
    $id = $fila['id'];
    $nombreImagen = $fila['nombre'];
    $tipoImagen = $fila['tipo'];
    $contenidoImagen = $fila['imagen'];

    // Establecer el tamaño máximo de la imagen
    $maxWidth = 400; // Ancho máximo en píxeles
    $maxHeight = 267; // Alto máximo en píxeles

    // Obtener las dimensiones de la imagen
    $imageSize = getimagesizefromstring($contenidoImagen);
    $originalWidth = $imageSize[0];
    $originalHeight = $imageSize[1];

    // Calcular las nuevas dimensiones de la imagen manteniendo la proporción
    $ratio = min($maxWidth / $originalWidth, $maxHeight / $originalHeight);
    $newWidth = $originalWidth * $ratio;
    $newHeight = $originalHeight * $ratio;

    // Generar la etiqueta <img> con los datos de la imagen y el tamaño limitado
    echo '<div style="display: flex; justify-content: center; align-items: flex-start; height: 100vh;">';
    echo '<div style="align-self: flex-start; margin-top: -340px;">';
    echo '<img src="data:' . $tipoImagen . ';base64,' . base64_encode($contenidoImagen) . '" alt="' . $nombreImagen . '" style="max-width: ' . $newWidth . 'px; max-height: ' . $newHeight . 'px;">';
    echo '</div>';
    echo '</div>';
	


	 
}







 } 
    
  else {
    //echo " El libro buscado no existe en la base de datos";
	
	        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El libro buscado no existe en la Base de Datos</p></div>";

  }

  // Cerrar la conexión a la base de datos
  $conn->close();

}

}
 }

/*Funcion para buscar  un libro por su titulo*/
function busquedaLiboTitulo($conn){

// Obtener el ID del libro enviado desde el formulario
if (isset($_POST['titulo'])) {
  $titulo = $_POST['titulo'];
  

  // Preparar la consulta SQL para buscar el libro por su ID
 // $sql = "SELECT * FROM libro WHERE titulo = '$titulo'";
 
  $sql = "SELECT * FROM libro WHERE titulo like '%$titulo%' and borrado is null";


   $resultado = mysqli_query($conn, $sql);

  // Ejecutar la consulta
//  $result = $conn->query($sql);

  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) > 0) {
   while ($libroEncontrado = $resultado->fetch_assoc()) {
      echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;'>";
      echo "<h3>Codigo: " . $libroEncontrado['id_libro'] . "</h3>";
      echo "<p><strong>Título:</strong> " . $libroEncontrado['titulo'] . "</p>";
      echo "<p><strong>Género:</strong> " . $libroEncontrado['genero'] . "</p>";
      echo "<p><strong>Tomo:</strong> " . $libroEncontrado['tomo'] . "</p>";
      echo "<p><strong>Estado:</strong> " . $libroEncontrado['estado'] . "</p>";
      echo "<p><strong>Estado de Conservación:</strong> " . $libroEncontrado['estado_conservacion'] . "</p>";
	        echo "<p><strong>Codigo Editorial:</strong> " . $libroEncontrado['id_editorial'] . "</p>";
      echo "<p><strong>Descripción:</strong> " . $libroEncontrado['descripcion'] . "</p>";

      echo "</div>";
    }
	
	
	 // Consulta para obtener las imágenes
  
  //$sql = "SELECT i.id,i.nombre, i.tipo,i.imagen from imagenes i, libro l where l.titulo = '$titulo'";
  
  $sql = "SELECT i.id,i.nombre, i.tipo,i.imagen from imagenes i, libro l 
  where l.titulo  like '%$titulo%' and l.id_libro = i.id_libro";
  
    $resultado = mysqli_query($conn, $sql);



    // Mostrar las imágenes
    // Mostrar las imágenes'</div>';
while ($fila = mysqli_fetch_assoc($resultado)) {
    $id = $fila['id'];
    $nombreImagen = $fila['nombre'];
    $tipoImagen = $fila['tipo'];
    $contenidoImagen = $fila['imagen'];

    // Establecer el tamaño máximo de la imagen
    $maxWidth = 400; // Ancho máximo en píxeles
    $maxHeight = 267; // Alto máximo en píxeles

    // Obtener las dimensiones de la imagen
    $imageSize = getimagesizefromstring($contenidoImagen);
    $originalWidth = $imageSize[0];
    $originalHeight = $imageSize[1];

    // Calcular las nuevas dimensiones de la imagen manteniendo la proporción
    $ratio = min($maxWidth / $originalWidth, $maxHeight / $originalHeight);
    $newWidth = $originalWidth * $ratio;
    $newHeight = $originalHeight * $ratio;

    // Generar la etiqueta <img> con los datos de la imagen y el tamaño limitado
    echo '<div style="display: flex; justify-content: center; align-items: flex-start; height: 100vh;">';
    echo '<div style="align-self: flex-start; margin-top: -340px;">';
    echo '<img src="data:' . $tipoImagen . ';base64,' . base64_encode($contenidoImagen) . '" alt="' . $nombreImagen . '" style="max-width: ' . $newWidth . 'px; max-height: ' . $newHeight . 'px;">';
    echo '</div>';
    echo '</div>';
}

	

 } 
    
  else {
    //echo "El libro buscado no existe en la base de datos";
		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El libro buscado no existe en la Base de Datos</p></div>";

  }

  // Cerrar la conexión a la base de datos
  $conn->close();
  
}
}

/*Funcion para realizar un prestamo de libro*/

function prestamo($conn){


// Obtener los datos del formulario

$id_libro = $_POST['id_libro'];
$ci = $_POST['ci'];
$fecha_prestamo = $_POST['fecha_prestamo'];
$fecha_devolucion = $_POST['fecha_devolucion'];

// Formateo de fecha prestamo y devolucion
$fecha_formateada1 = date('Y/m/d', strtotime($fecha_prestamo));
$fecha_formateada2 = date('Y/m/d', strtotime($fecha_devolucion));

$fecha_actual = date('Y/m/d');
		
$fecha1 = strtotime($fecha_actual);
$fecha2 = strtotime($fecha_formateada1);

$nombreErr = "";


$diferencia=$fecha1-$fecha2;
$dias = floor($diferencia / (60 * 60 * 24));



   
 //if ($fecha_formateada2 > $fecha_formateada1) {
        
	//	  		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>La fecha de devolución no puede ser anterior a la fecha de préstamo.</p></div>";

      // } 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if(  $fecha_devolucion = test_input($_POST["fecha_devolucion"]) and $fecha_prestamo = test_input($_POST["fecha_prestamo"]) )  ;
        // Validar que el nombre contenga solo letras y espacios
		$fecha_formateada1 = date('Y/m/d', strtotime($fecha_prestamo));
		$fecha_formateada2 = date('Y/m/d', strtotime($fecha_devolucion));

     if ($fecha_formateada1>$fecha_formateada2) {

     // if ((!preg_match("/^[0-9]+$/", $ci)) or (!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "La fecha de devolución debe ser mayor  igual a la fecha de préstamo. Intente nuevamente ";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    
 }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $ci = test_input($_POST["ci"]) or  $id_libro = test_input($_POST["id_libro"])   ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $ci)) or (!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten digitos en el campo CI y código";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }









// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $ci = test_input($_POST["ci"]) or  $id_libro = test_input($_POST["id_libro"])   ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $ci)) or (!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten digitos en el campo CI y código";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){
	   

	  

	     // Preparar la consulta SQL para buscar el libro
  $sql1 = "SELECT id_libro from libro WHERE id_libro = '$id_libro'";

   $resultado2 = mysqli_query($conn, $sql1);


  // Preparar la consulta SQL para buscar el socio
  $sql = "SELECT ci from socio WHERE ci = '$ci'";

   $resultado = mysqli_query($conn, $sql);




  // Verificar si se encontró algún resultado
     if ((mysqli_num_rows($resultado) >0) and (mysqli_num_rows($resultado2) >0)) {
	   
	   
	   


// Preparar la consulta SQL chequear si el libro esta disponible antes de hacer el prestamo
$consulta = "select id_libro from libro where id_libro = '$id_libro' and estado = 'no disponible'  ";


    $resultado = mysqli_query($conn, $consulta);
 
      
    


 
// Preparar la consulta SQL para insertar el préstamo en la tabla retira
$sql = "INSERT INTO retira ( id_libro,ci, prestamo, devolucion, pres_dev, cant_dias, veces_renovado )
        VALUES ( '$id_libro', '$ci' , '$fecha_formateada1', '$fecha_formateada2', 1, $dias, 0 )";



	

// Ejecutar la consulta

 if (mysqli_num_rows($resultado) > 0) {
 // echo "El libro especificado esta  en prestamo.";
 		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El libro especificado esta  en préstamo</p></div>";

}
 else {




if ($conn->query($sql) === TRUE) {
//echo "Préstamo registrado exitosamente.";
  		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Préstamo registrado exitosamente</p></div>";


} else {
 // echo "Error al registrar el préstamo: " . $conn->error;
  		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Error al registrar el préstamo</p></div>";

}
}
}
else {
 // echo "El socio/libro ingresado no esta registrado en la Base de Datos " . $conn->error;
    		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El socio/libro ingresado no esta registrado en la Base de Datos</p></div>";

}
 
// Cerrar la conexión a la base de datos
$conn->close();

}
}

/*Funcion para realizar una devolucion de un libro*/

function devolucion($conn){


// Obtener los datos del formulario
$id_libro = $_POST['id_libro'];
$ci = $_POST['ci'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$fecha_formateada2 = date('Y/m/d', strtotime($fecha_devolucion));


$nombreErr = "";


// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $ci = test_input($_POST["ci"]) or  $id_libro = test_input($_POST["id_libro"])   ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $ci)) or (!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos en el campo CI y código";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }



   if ($nombreErr == "" ){


	   
	  

	     // Preparar la consulta SQL para buscar el libro
  $sql1 = "SELECT id_libro from retira WHERE id_libro = '$id_libro'";

   $resultado2 = mysqli_query($conn, $sql1);


  // Preparar la consulta SQL para buscar el socio
  $sql = "SELECT ci from retira WHERE ci = '$ci'";

   $resultado = mysqli_query($conn, $sql);




  $sql3 = "SELECT pres_dev from retira WHERE ci = '$ci' and  pres_dev=1";

   $resultado3 = mysqli_query($conn, $sql3);





   //$resultado = mysqli_query($conn, $sql);

  // Verificar si se encontró algún resultado
     if ((mysqli_num_rows($resultado) >0) and (mysqli_num_rows($resultado2) >0)   ) {



							if  (mysqli_num_rows($resultado3) >0) {





// Preparar la consulta SQL para registrar devolucion en la tabla retira
$sql = "update libro inner join retira on
libro.id_libro = retira.id_libro 
 set libro.estado = 'disponible', retira.pres_dev = 0, retira.fecha_devuelto  = '$fecha_formateada2'
 where libro.id_libro = '$id_libro' and retira.ci = '$ci'";
 
 
 
 
 // cero cuando se hace devolucion

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
// echo "Devolución realizada exitosamente.";
      		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Devolución realizada exitosamente</p></div>";

} else {
  //echo "Error al registrar el préstamo: " . $conn->error;
      		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Error al registrar el préstamo</p></div>";

}

}




else {
 // echo "El socio/libro ingresado no esta registrado en la base de datos " . $conn->error;
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Libro devuelto por el socio especificado</p></div>";
}
}



else {

    		        
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El socio/libro ingresado no esta registrado en la base de datos</p></div>";


}



// Cerrar la conexión a la base de datos
$conn->close();


 }
 }
 

/*Funcion para realizar actualizar datos de un socio*/
function modificarsocio($conn){

    // Obtener la cédula enviada desde el formulario
    $cedula = $_POST['cedula'];

$nombreErr = "";


	// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $cedula = test_input($_POST["cedula"])  ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $cedula)) ){
            $nombreErr = "Solo se permiten dígitos en el campo CI, intente nuevamente";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }






   if ($nombreErr == "" ){


    // Verificar si hubo un error en la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    } else {
        // Consulta SQL para obtener los datos de la tabla según la cédula ingresada
        $consulta = "SELECT nombre, apellido, sexo, fecha_nac, fijo,tipo, email,grupo FROM persona WHERE ci = '$cedula'";
 
        // Ejecutar la consulta
        $resultado = mysqli_query($conn, $consulta);

        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los resultados en un formulario para su modificación
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<form action='buscarsocio.php' method='POST'>";
				
				
				
					
				echo "<label for='nuevo_tipo'>Rol:</label>";
				$rolExistente = $fila['tipo'];

// Lista de géneros permitidos
$rolesPermitidos = array("Alumno", "Docente" );


 

echo '<select id="nuevo_tipo" name="nuevo_tipo">';

foreach ($rolesPermitidos as $tipo) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($rolExistente === $tipo) ? 'selected' : '';

    echo "<option value='$tipo' $seleccionado>$tipo</option>";
}

echo '</select>';
				
				
				
                echo "<label for='nuevo_nombre'>Nombre:</label>";
                echo "<input type='text' id='nuevo_nombre' name='nuevo_nombre' maxlength='15' value='" . $fila['nombre'] . "' required><br>";
                
				echo "<label for='nuevo_apellido'>Apellido:</label>";
                echo "<input type='text' id='nuevo_apellido' name='nuevo_apellido'  maxlength='15' value='" . $fila['apellido'] . "' required><br>";
						echo "<label for='nuevo_grupo'>Grupo:</label>";
				echo "<input type='text' id='nuevo_grupo' name='nuevo_grupo'  maxlength='5' value='" . $fila['grupo'] . "' ><br>";
				
			    			
							
							
							echo "<label for='nuevo_sexo'>Sexo:</label>";
			//	echo "<input type='text' id='nuevo_sexo' name='nuevo_sexo'  maxlength='5' value='" . $fila['sexo'] . "' ><br>";
				
								$sexoExistente = $fila['sexo'];

// Lista de géneros permitidos
$sexosPermitidos = array("M", "F" );


 

echo '<select id="nuevo_sexo" name="nuevo_sexo">';

foreach ($sexosPermitidos as $sexo) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($sexoExistente === $sexo) ? 'selected' : '';

    echo "<option value='$sexo' $seleccionado>$sexo</option>";
}

echo '</select>';
				
				
				
				
				echo "<label for='nuevo_fijo'>Tel:</label>";
				echo "<input type='text' id='nuevo_fijo' name='nuevo_fijo'  maxlength='9' value='" . $fila['fijo'] . "' ><br>";
			    
		
              //  echo "<input type='text' id='nuevo_tipo' name='nuevo_tipo' value='" . $fila['tipo'] . "' required><br>";		




						  
				
				echo "<label for='nuevo_email'>Email:</label>";
                echo "<input type='text' id='nuevo_email' name='nuevo_email'  maxlength='40' value='" . $fila['email'] . "' ><br>";
				

			
				
				echo "<input type='hidden' name='cedula' value='$cedula'>";
                echo "<button type='submit'>Actualizar</button>";
                echo "</form>";
				
				

				
				
				
            }
        } else {
         //   echo "No se encontraron resultados.";


	  	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No se encontraron resultados</p></div>";

        // Liberar los resultados de la memoria
        mysqli_free_result($resultado);
    }}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar la existencia de las claves antes de asignar los valores
    $nuevoNombre = isset($_POST['nuevo_nombre']) ? $_POST['nuevo_nombre'] : '';
    $nuevoApellido = isset($_POST['nuevo_apellido']) ? $_POST['nuevo_apellido'] : '';
 
    $nuevoEmail = isset($_POST['nuevo_email']) ? $_POST['nuevo_email'] : '';
    $nuevoFijo = isset($_POST['nuevo_fijo']) ? $_POST['nuevo_fijo'] : '';

	    $nuevoTipo = isset($_POST['nuevo_tipo']) ? $_POST['nuevo_tipo'] : '';
		    $nuevoGrupo = isset($_POST['nuevo_grupo']) ? $_POST['nuevo_grupo'] : '';
			    $nuevoSexo = isset($_POST['nuevo_sexo']) ? $_POST['nuevo_sexo'] : '';
    $cedula = isset($_POST['cedula']) ? $_POST['cedula'] : '';






        // Verificar si hubo un error en la conexión
        if (mysqli_connect_errno()) {
            echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        } else {
            // Consulta SQL para actualizar los datos en la tabla según la cédula ingresada
            $consulta = "UPDATE persona SET nombre = '$nuevoNombre', apellido = '$nuevoApellido',  sexo = '$nuevoSexo', tipo = '$nuevoTipo', grupo = '$nuevoGrupo',
			email = '$nuevoEmail', fijo = '$nuevoFijo' 	WHERE ci = '$cedula'";

            // Ejecutar la consulta
            $resultado = mysqli_query($conn, $consulta);
			
			
       
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
    }
	
	}
		 }
		
		
		
		
		
		


	/*Funcion para realizar actualizar datos de un libro*/
	function modificarlibro($conn){
	
	 // Obtener la cédula enviada desde el formulario
    $id_libro = $_POST['id_libro'];


$nombreErr = "";


	// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id_libro = test_input($_POST["id_libro"])  ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos el código.";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }



   if ($nombreErr == "" ){


    // Verificar si hubo un error en la conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    } else {
        // Consulta SQL para obtener los datos de la tabla según la cédula ingresada
        $consulta = "SELECT titulo, genero, tomo, descripcion, id_editorial,estado, estado_conservacion 
		FROM libro WHERE id_libro= '$id_libro'";

        // Ejecutar la consulta
        $resultado = mysqli_query($conn, $consulta);

        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los resultados en un formulario para su modificación
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<form action='buscarlibro.php' method='POST'>";
                echo "<label for='nuevo_titulo'>Titulo:</label>";
                echo "<input type='text' maxlength='50' id='nuevo_titulo' name='nuevo_titulo' value='" . $fila['titulo'] . "' ><br>";
               
              //  echo "<input type='text' id='nuevo_genero' name='nuevo_genero' value='" . $fila['genero'] . "' ><br>";
			  
			  			   echo "<label for='nuevo_estadoo'>Estado:</label>";

			  			  // Valor obtenido de la base de datos
$estadooExistente = $fila['estado'];

// Lista de géneros permitidos
$estadoosPermitidos = array("disponible", "no disponible"  );

 

echo '<select id="nuevo_estadoo" name="nuevo_estadoo">';


foreach ($estadoosPermitidos as $estado) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($estadooExistente === $estado) ? 'selected' : '';

    echo "<option value='$estado' $seleccionado>$estado</option>";
}

echo '</select>';
			






			  
			   echo "<label for='nuevo_genero'>Género:</label>";
			  
			  // Valor obtenido de la base de datos
$generoExistente = $fila['genero'];

// Lista de géneros permitidos
$generosPermitidos = array("Texto", "Terror", "Autoayuda", "Novela","Autoayuda","Cuento","Novela","Poesía","Drama","Misterio","Fantasía", "Histórica"  );


 

echo '<select id="nuevo_genero" name="nuevo_genero">';

foreach ($generosPermitidos as $genero) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($generoExistente === $genero) ? 'selected' : '';

    echo "<option value='$genero' $seleccionado>$genero</option>";
}

echo '</select>';
			  
			  
			    
			echo "<label for='nuevo_tomo'>Tomo:</label>";
            //    echo "<input type='text' id='nuevo_tomo' name='nuevo_tomo' value='" . $fila['tomo'] . "' ><br>";	
			
			
						  // Valor obtenido de la base de datos
$tomoExistente = $fila['tomo'];

// Lista de géneros permitidos
$tomosPermitidos = array(1,2,3,4,5,6  );

 

echo '<select id="nuevo_tomo" name="nuevo_tomo">';

foreach ($tomosPermitidos as $tomo) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($tomoExistente === $tomo) ? 'selected' : '';

    echo "<option value='$tomo' $seleccionado>$tomo</option>";
}

echo '</select>';
			
			
			




												echo "<label for='Estado de conservación'>Estado de conservación:</label>";	
								              //  echo "<input type='text' id='nuevo_estado' name='nuevo_estado' value='" . $fila['estado_conservacion'] . "' ><br>";
$estadoExistente = $fila['estado_conservacion'];

// Lista de géneros permitidos
$estadosPermitidos = array("Bueno", "Malo", "Excelente" );


 

echo '<select id="nuevo_estado" name="nuevo_estado">';

foreach ($estadosPermitidos as $estado_conservacion) {
    // Verifica si el género actual es el que está en la base de datos
    $seleccionado = ($estadoExistente === $estado_conservacion) ? 'selected' : '';

    echo "<option value='$estado_conservacion' $seleccionado>$estado_conservacion</option>";
}

echo '</select>';
			
			

				
								echo "<label for='nuevo_editorial'>Editorial:</label>";	
								                echo "<input type='text' maxlength='40' id='nuevo_editorial' name='nuevo_editorial' value='" . $fila['id_editorial'] . "' ><br>";

echo "<label for='nuevo_descripcion'>Descripción:</label><br>";
echo "<textarea id='nuevo_descripcion' name='nuevo_descripcion' maxlength='200';  style='width: 400px; height: 100px;'>" . $fila['descripcion'] . "</textarea><br>";







			   echo "<input type='hidden' name='id_libro' value='$id_libro'>";

                echo "<button type='submit'>Actualizar</button>";
				
	             echo "</form>";
            }
        } else {
           // echo "No se encontraron resultados.";
	  	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No se encontraron resultados</p></div>";

        // Liberar los resultados de la memoria
      mysqli_free_result($resultado);
    }}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar la existencia de las claves antes de asignar los valores
    $nuevo_titulo = isset($_POST['nuevo_titulo']) ? $_POST['nuevo_titulo'] : '';
	  $nuevo_estadoo = isset($_POST['nuevo_estadoo']) ? $_POST['nuevo_estadoo'] : '';
    $nuevo_genero = isset($_POST['nuevo_genero']) ? $_POST['nuevo_genero'] : '';
    $nuevo_tomo = isset($_POST['nuevo_tomo']) ? $_POST['nuevo_tomo'] : '';
	   $id_libro = isset($_POST['id_libro']) ? $_POST['id_libro'] : '';
    $nuevo_descripcion = isset($_POST['nuevo_descripcion']) ? $_POST['nuevo_descripcion'] : '';
   $id_libro = isset($_POST['id_libro']) ? $_POST['id_libro'] : '';
      $nuevo_editorial = isset($_POST['nuevo_editorial']) ? $_POST['nuevo_editorial'] : '';

     $nuevo_estado = isset($_POST['nuevo_estado']) ? $_POST['nuevo_estado'] : '';

        // Verificar si hubo un error en la conexión
        if (mysqli_connect_errno()) {
            echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        } else {
            // Consulta SQL para actualizar los datos en la tabla según la cédula ingresada
            $consulta = "UPDATE libro 
			SET titulo = '$nuevo_titulo', genero = '$nuevo_genero', tomo = '$nuevo_tomo', id_editorial= '$nuevo_editorial' ,  descripcion = '$nuevo_descripcion' , estado_conservacion ='$nuevo_estado',
			estado = '$nuevo_estadoo'
			WHERE id_libro = '$id_libro'";

            // Ejecutar la consulta
        $resultado = mysqli_query($conn, $consulta);

        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
    }
	
  }
 }
 



function listarsocio($conn){



    // Consulta de los registros de la tabla socio
    $sql = "SELECT s.ci, id_socio, fecha_ins, nombre, apellido, p.email, p.fijo, p.grupo, p.tipo FROM socio s, persona p
	where p.ci = s.ci and s.borrado is null ";
	

		
		
	
	
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ci"] . "</td>";
	    echo "<td>" . $row["nombre"] . "</td>";
	    echo "<td>" . $row["apellido"] . "</td>";
				echo "<td>" . $row["tipo"] . "</td>";
		     echo "<td>" . $row["grupo"] . "</td>";
        echo "<td>" . $row["id_socio"] . "</td>";
		echo "<td>" . $row["fijo"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["fecha_ins"] . "</td>";
		 
        echo "</tr>";
      }
    } else {
      //echo "<tr><td colspan='3'>No hay registros de socios</td></tr>";
	  	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros de socios</p></div>";

    }


    // Cierre de la conexión a la base de datos
    $conn->close();
    
	}


function listarlibro($conn){


    // Consulta de los registros de la tabla libro
    $sql = "SELECT id_libro, titulo, genero, estado, estado_conservacion, descripcion, tomo, id_editorial FROM libro where borrado is null ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
      echo "<td>" . $row["id_libro"] . "</td>";

       echo "<td>" . $row["titulo"] . "</td>";
	   echo "<td>" . $row["genero"] . "</td>";
	   echo "<td>" . $row["tomo"] . "</td>";
	   echo "<td>" . $row["estado"] . "</td>"; 
	   echo "<td>" . $row["estado_conservacion"] . "</td>"; 
	   echo "<td>" . $row["id_editorial"] . "</td>"; 
	   echo "<td>" . $row["descripcion"] . "</td>"; 
	
       echo "</tr>";
      }
    } else {
      //echo "<tr><td colspan='3'>No hay registros de libros</td></tr>";
	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros de libros</p></div>";

    }

    // Cierre de la conexión a la base de datos
    $conn->close();
    
	}
	
	

	
function listarprestamo($conn){
	
		
		
	
	  // Consulta de los registros de la tabla socio
    $sql = "SELECT id_prestamo,r.id_libro,r.ci, prestamo, devolucion, l.estado, l.titulo, nombre, apellido, cant_dias, veces_renovado, id_socio, r.vigencia
	FROM retira r, libro l, socio s, persona p
	where r.id_libro = l.id_libro and s.ci = p.ci and p.ci = r.ci and estado='no disponible' and r.pres_dev =1";
    $result = $conn->query($sql);
	
	
	
		// Fecha actual para la inscripcion de socio
		$fecha_actual = date('Y/m/d');
			
					// actualiza el campo vencido si el prestamo caduco

		$sql3 ="	UPDATE retira
SET vigencia = IF('$fecha_actual' > devolucion , 'vencido', vigencia)";
			
				$sql4 ="	UPDATE retira
SET vigencia = IF(devolucion> '$fecha_actual', 'vigente', vigencia)";
			
			
			    $result3 = $conn->query($sql3);

					    $result4 = $conn->query($sql4);

/*	if ($fecha_actual > $devolucion ) {
		  $sql3 = "update retira set  vigencia = 'vencido'";
    $result = $conn->query($sql3);
	
		
	}*/
	

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_prestamo"] . "</td>";

       echo "<td>" . $row["id_libro"] . "</td>";
	   echo "<td>" . $row["titulo"] . "</td>";
	   echo "<td>" . $row["ci"] . "</td>";
	   echo "<td>" . $row["nombre"] . "</td>";
	   echo "<td>" . $row["apellido"] . "</td>";
	     echo "<td>" . $row["id_socio"] . "</td>";
	   echo "<td>" . $row["prestamo"] . "</td>"; 
	    echo "<td>" . $row["devolucion"] . "</td>"; 
		  //  echo "<td>" . $row["cant_dias"] . "</td>"; 
		  echo "<td>" . $row["estado"] . "</td>"; 
	   echo "<td>" . $row["veces_renovado"] . "</td>"; 
	 //    echo "<td>" . $row["vigencia"] . "</td>"; 
	 
	  if ($row["vigencia"] === 'vencido') {
        echo "<td style='color: red;'>" . $row["vigencia"] . "</td>";
    } else {
        echo "<td>" . $row["vigencia"] . "</td>";
    }
        echo "</tr>";
      }
    } else {
      
	  //echo "<tr><td colspan='3'>No hay registros de libros</td></tr>";
	    echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros de libros</p></div>";

    }

    // Cierre de la conexión a la base de datos
    $conn->close();
	 }
	 
	 
	 function listardevolucion($conn){
	 
    // Consulta de los registros de la tabla socio
    $sql = "SELECT id_prestamo,r.id_libro,r.ci, prestamo, devolucion, l.estado, l.titulo, nombre, apellido, r.fecha_devuelto, veces_renovado 
	FROM retira r, libro l, socio s, persona p
	where r.id_libro = l.id_libro and s.ci = p.ci and p.ci = r.ci  and r.fecha_devuelto>0 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_prestamo"] . "</td>";

       echo "<td>" . $row["id_libro"] . "</td>";
	   echo "<td>" . $row["titulo"] . "</td>";
	   echo "<td>" . $row["ci"] . "</td>";
	   echo "<td>" . $row["nombre"] . "</td>";
	   echo "<td>" . $row["apellido"] . "</td>";
	   
	   echo "<td>" . $row["prestamo"] . "</td>"; 
	   echo "<td>" . $row["devolucion"] . "</td>";
       echo "<td>" . $row["fecha_devuelto"] . "</td>";
       echo "<td>" . $row["veces_renovado"] . "</td>"; 		
	   
	  
        echo "</tr>";
      }
    } else {
     // echo "<tr><td colspan='3'>No hay registros de libros</td></tr>";
	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros de libros</p></div>";

	 
    }

    // Cierre de la conexión a la base de datos
    $conn->close();
	 }


function login(){
	 

// Datos de conexión a la base de datos
$host = 'localhost';
$dbname = 'obligatoriophp';
$username = 'root';
$password = 'root';

// Obtener los datos del formulario
$usernameInput = $_POST['username'];
$passwordInput = $_POST['password'];

try {
    // Establecer conexión a la base de datos
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para verificar las credenciales del administrador
    $query = "SELECT * FROM administrador WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $usernameInput);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && $passwordInput === $admin['password']) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. ¡Bienvenido, administrador!";
		
		        // Puedes redirigir a otra página aquí si lo deseas
    header("Location: ../view/menu.php");
    } else {
        // Credenciales incorrectas
       // echo "Usuario o contraseña incorrectos. Intene nuevamente";
	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Usuario o contraseña incorrectos. Intene nuevamente</p></div>";

    }

    // Cerrar la conexión a la base de datos
    $db = null;
} catch (PDOException $e) {
    // Manejo de errores de conexión o consulta
    echo 'Error: ' . $e->getMessage();
}


   
	 }


// Funcion para eliminar un libro
function eliminarLibro($conn){


// Obtener los datos del formulario
$id_libro = $_POST['id_libro'];


$nombreErr = "";

	// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id_libro = test_input($_POST["id_libro"])  ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos el código.";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){


  // Preparar la consulta SQL para buscar el libro por su ID
  $sql = "SELECT id_libro from libro WHERE id_libro = '$id_libro'";

   $resultado = mysqli_query($conn, $sql);

  // Ejecutar la consulta
//  $result = $conn->query($sql);

  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) > 0) {
		 
		 
		  
  	    $consulta1 = "update   imagenes set borrado = 1  WHERE id_libro = '$id_libro'";

		 
	    //$consulta1 = "delete from  imagenes  WHERE id_libro = '$id_libro'";
	         $resultado = mysqli_query($conn, $consulta1);



$consulta = "update libro set borrado = '1' where id_libro = '$id_libro'";
    // $consulta = "delete from  libro WHERE id_libro = '$id_libro'";

            // Ejecutar la consulta
        $resultado = mysqli_query($conn, $consulta);

		
 // echo "Libro eliminado de la base de datos.";
             		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Libro eliminado de la Base de Datos</p></div>";

} else {
  //echo "Libro no registrado en la base de datos " . $conn->error;
            		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Libro no registrado en la Base de Datos</p></div>";

}

// Cerrar la conexión a la base de datos
$conn->close();

}
}


// Funcion para eliminar un socio
function elimnarSocio($conn){


// Obtener los datos del formulario
$ci = $_POST['ci'];


$nombreErr = "";

	// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $ci = test_input($_POST["ci"])  ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $ci)) ){
            $nombreErr = "Solo se permiten dígitos en el campo CI.";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){


  // Preparar la consulta SQL para buscar el socio por su ci
  $sql = "SELECT ci from socio WHERE ci = '$ci'";

   $resultado = mysqli_query($conn, $sql);

  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) > 0) {
		 

 $consulta = "update socio set borrado = '1' where ci = '$ci'";
  $consulta2 = "update persona set borrado = '1'  where ci = '$ci'";

   //  $consulta = "delete from  socio WHERE ci = '$ci'";
   // $consulta2 = "delete from  persona WHERE ci = '$ci'";
            // Ejecutar la consulta
			
        $resultado = mysqli_query($conn, $consulta);
        mysqli_query($conn, $consulta2);
		
  //echo "Socio eliminado de la base de datos.";
          		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Socio eliminado de la Base de Datos</p></div>";

} else {
  //echo "Socio no registrado en la base de datos " . $conn->error;
        		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Socio no registrado en la Base de Datos</p></div>";

}

// Cerrar la conexión a la base de datos
$conn->close();

}
}














function renovacion($conn){


// Obtener los datos del formulario
$id_libro = $_POST['id_libro'];
$ci = $_POST['ci'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$fecha_formateada2 = date('Y/m/d', strtotime($fecha_devolucion));



//$nueva_fecha = date('Y-m-d', strtotime($fecha_formateada2 . ' +7 days'));

$nombreErr = "";


// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $ci = test_input($_POST["ci"]) or  $id_libro = test_input($_POST["id_libro"])   ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $ci)) or (!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos en la CI y Código";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }



   if ($nombreErr == "" ){


	   
	  

	     // Preparar la consulta SQL para buscar el libro
  $sql1 = "SELECT id_libro from retira WHERE id_libro = '$id_libro'";

   $resultado2 = mysqli_query($conn, $sql1);


  // Preparar la consulta SQL para buscar el socio
  $sql = "SELECT ci from retira WHERE ci = '$ci'";

   $resultado = mysqli_query($conn, $sql);




  $sql3 = "SELECT pres_dev from retira WHERE ci = '$ci' and  pres_dev=1";

   $resultado3 = mysqli_query($conn, $sql3);


 	

  $sql4 = "SELECT id_prestamo from retira WHERE ci = '$ci' and   id_libro = '$id_libro' and veces_renovado<2 and pres_dev=1";

   $resultado4 = mysqli_query($conn, $sql4);



   //$resultado = mysqli_query($conn, $sql);

  // Verificar si se encontró algún resultado
     if ((mysqli_num_rows($resultado) >0) and (mysqli_num_rows($resultado2) >0)   ) {



							if  (mysqli_num_rows($resultado3) >0) {


		if  (mysqli_num_rows($resultado4) >0) {

$sql2 ="call sumarenovacion8 ($ci, $id_libro)";

	$conn->query($sql2);



// Preparar la consulta SQL para registrar renovacion en la tabla retira
$sql = "update retira  inner join libro on
libro.id_libro = retira.id_libro 
set retira.devolucion  = '$fecha_formateada2' 
 where libro.id_libro = '$id_libro' and retira.ci = '$ci' and retira.pres_dev =1 ";

 

	
	
 
 // campo en cero cuando se hace devolucion

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
// echo "Devolución realizada exitosamente.";
      		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Fecha de devolución actualizada correctamente</p></div>";
	 

} else {
  //echo "Error al registrar el préstamo: " . $conn->error;
      		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Error al registrar la devolución</p></div>";

}

}
else {
  //echo "Error al registrar el préstamo: " . $conn->error;
      		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Ha alcazano el máximo de 2 renovaciones para dicho socio</p></div>";

}

 }


else {
 // echo "El socio/libro ingresado no esta registrado en la base de datos " . $conn->error;
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El libro especificado fue devuelto</p></div>";
}
}



else {

    		        
echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>El socio/libro ingresado no esta registrado en la base de datos</p></div>";


}



// Cerrar la conexión a la base de datos
$conn->close();



 }
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 // Funcion para eliminar un libro
function eliminarPortada($conn){


// Obtener los datos del formulario
$id_libro = $_POST['id_libro'];


$nombreErr = "";

	// controla que en los campos se ingrese digitos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id_libro = test_input($_POST["id_libro"])  ;
        // Validar que el nombre contenga solo letras y espacios
        if ((!preg_match("/^[0-9]+$/", $id_libro)) ){
            $nombreErr = "Solo se permiten dígitos el código.";
			//echo  $nombreErr;
									        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>$nombreErr</p></div>";

        }
    }


   if ($nombreErr == "" ){


  // Preparar la consulta SQL para buscar el libro por su ID
  $sql = "SELECT id_libro from libro WHERE id_libro = '$id_libro'";

   $resultado = mysqli_query($conn, $sql);

  // Ejecutar la consulta
//  $result = $conn->query($sql);

  // Verificar si se encontró algún resultado
     if (mysqli_num_rows($resultado) > 0) {
		 

     $consulta = "delete from  imagenes  WHERE id_libro = '$id_libro'";

            // Ejecutar la consulta
        $resultado = mysqli_query($conn, $consulta);

		
 // echo "Libro eliminado de la base de datos.";
             		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Portada eliminada de la Base de Datos</p></div>";

} else {
  //echo "Libro no registrado en la base de datos " . $conn->error;
            		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>Libro no registrado en la Base de Datos</p></div>";

}

// Cerrar la conexión a la base de datos
$conn->close();

}
}












function filtrar_ci($conn){

if (isset($_POST['filtro_ci'])) {
$filtro_ci = $_POST['filtro_ci'];

    // Consulta de los registros de la tabla socio
    $sql = "SELECT  s.ci, id_socio, fecha_ins, nombre, apellido, p.email, p.fijo, p.grupo, p.tipo FROM socio s, persona p
	where p.ci = s.ci and s.ci like '%$filtro_ci%' and s.borrado is null   ";
	

		
	
	
    $result = $conn->query($sql);

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ci"] . "</td>";
	    echo "<td>" . $row["nombre"] . "</td>";
	    echo "<td>" . $row["apellido"] . "</td>";
				echo "<td>" . $row["tipo"] . "</td>";
		     echo "<td>" . $row["grupo"] . "</td>";
        echo "<td>" . $row["id_socio"] . "</td>";
		echo "<td>" . $row["fijo"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["fecha_ins"] . "</td>";
		 
        echo "</tr>";
      }
    } else {
      //echo "<tr><td colspan='3'>No hay registros de socios</td></tr>";
	  	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros de socios</p></div>";

    }


    // Cierre de la conexión a la base de datos
    $conn->close();
    	}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
function filtrar_libros($conn){
	
	
 
            // Conectar a la base de datos
           // $conexion = mysqli_connect("localhost", "root", "root", "obligatoriophp");
  $genero = $_POST['genero'];

      
			
	 $sql = "SELECT id, nombre, tipo,imagen, l.id_libro, l.titulo, l.estado from  imagenes i, libro l where i.id_libro = l.id_libro and i.borrado is  null and l.genero 
	 = '$genero'";

			
    $resultado = mysqli_query($conn, $sql);
   
   
      if (mysqli_num_rows($resultado) > 0) {
   
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




}

}

else {
	
		  	  	 	                		        echo "<div style='background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'><p>No hay registros para el género $genero</p></div>";

}



}
			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	