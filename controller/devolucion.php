<?php
require_once  "../model/conexion.php";
//require_once "conexion.php";
//require_once "funciones.php";
require_once  "../model/funciones.php";
$conn = conectar();
devolucion ($conn );

?>
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
    <a href="../view/fdevolucion.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>