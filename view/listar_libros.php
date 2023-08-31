<!DOCTYPE html>
<html>
<head>
  <title>Registros de Socios</title>
  
  <title>Registros de Socios</title>
  <style>
  
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      /* Add the background image here */
      background-image: url("fondo/ll.jpg");
      /* Set background size and other properties as needed */
      background-size: cover;
      background-repeat: no-repeat;
    }

  
  
    body {
      font-family: Arial, sans-serif;
    }

    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    table {
      margin: 0 auto;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <h1> Registro de Libros</h1>

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
    <a href="fLibro.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>
  
  
  
  <table>
    <tr>
	  <th>Código</th>
      <th>Título</th>
	  <th>Género</th>
	  <th>Tomo</th>
	  <th>Estado</th>
	  <th>Estado conservación</th>
	  <th>Editorial</th>
	  <th>Descripción</th>
    </tr>
    <?php
	
	
	require_once  "../controller/listarlibro.php";	
//require_once  "../model/conexion.php";
//$conn = conectar();
?>
	

  </table>
</body>
</html>
