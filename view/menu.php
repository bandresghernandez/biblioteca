<!DOCTYPE html>
<html>
<head>
  <title>Menú Principal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      /* Add the background image here */
      background-image: url("fondo/imagen.png");
      /* Set background size and other properties as needed */
      background-size: cover;
      background-repeat: no-repeat;
    }

    h1 {
      text-align: center;
    }

    .menu-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .menu {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    .menu li {
      margin-right: 10px;
    }

    .menu li a {
      display: block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .menu li a:hover {
      background-color: #45a049;
    }
	
    body {
      position: relative;
      min-height: 100vh;
      margin: 0;
      padding-bottom: 50px; /* Altura del botón */
    }

    .btn {
      position: absolute;
      bottom: 100px;
      left: 50%;
      transform: translateX(-50%);
      display: inline-block;
      padding: 10px 20px;
      background-color: #2E8B57;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      border: none;
      font-family: Arial, sans-serif;
      font-size: 14px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #1C6E43;
    }
	
	  h1 {
      text-align: center;
      color: white; /* Set the text color of the h1 element to white */
    }
	
.menu-container {
  display: flex; /* Para que los botones estén en línea uno al lado del otro */
}

.boton {
  width: 160px; /* Ancho fijo del botón */
  height: 39px; /* Alto fijo del botón */
  margin: 0; /* Asegurarse de que no haya margen externo */
  padding: 0; /* Asegurarse de que no haya relleno interno */
    margin: 0 10px; /* Agregar 10px de margen horizontal y 0 de margen vertical */

  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  </style>
</head>
<body>
  <h1>Sistema de Biblioteca</h1>
  <div class="menu-container">
    <ul class="menu">
	<button class="boton">
      <li><a href="fsocio.php">SOCIOS</a></li>	    </button>
	
	  
<button class="boton">
      <li><a href="fLibro.php">LIBROS   </a></li>
	    </button>
		
		<button class="boton">
      <li><a href="fprestamos.php">PRÉSTAMOS</a></li>	    </button>
	  </button>
	  	<button class="boton">
      <li><a href="frenovacion.php">RENOVACIONES</a></li>
 </button>

	  	<button class="boton">
      <li><a href="fdevoluciones.php">DEVOLUCIONES</a></li>



    </ul>
    <button class="btn" onclick="window.location.href='../'">Salir del Sistema</button>
  </div>
</body>
</html>
