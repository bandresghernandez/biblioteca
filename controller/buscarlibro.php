<!DOCTYPE html>
<html>
<head>
    <title>Resultados de búsqueda</title>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de búsqueda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

</head>
<body>
    <h1>Resultados de búsqueda</h1>
    <?php
	
		require_once  "../model/conexion.php";
	//require_once "conexion.php";
	//require_once "funciones.php";
	require_once  "../model/funciones.php";
	$conn = conectar();
    modificarlibro ($conn );

   
    ?>
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
</head>
<body>
  <div class="container">
    <a href="../view/fbuscar_libro.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>
