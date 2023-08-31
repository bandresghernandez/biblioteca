<!DOCTYPE html>
<html>
<head>
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
  <h1> Libros devueltos</h1>
  <table>
    <tr>
	  <th>Código préstamo</th>
      <th>Código libro</th>
	   <th>Titulo</th>
	  <th>CI socio</th>
	   <th>Nombre</th>
	   <th>Apellido</th>
	  <th>Fecha préstamo</th>
	  <th>Fecha devolución</th>
	   <th>Fecha devuelto</th>
	   	   <th>Renovaciones</th>

	 
    </tr>
    <?php
	require_once  "../controller/listardevolucion.php";	

    ?>
  </table>
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
    <a href="fdevoluciones.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>