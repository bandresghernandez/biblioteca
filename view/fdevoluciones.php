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
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
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
	
  </style>
</head>
<body>
  <h1>Sistema de Biblioteca</h1>
  <div class="menu-container">
    <ul class="menu">
    
	
	  
	   <li><a href="fdevolucion.php">Devolución de Libro</a></li>
	  <li><a href="listar_devoluciones.php">Listar Devoluciones</a></li>
      <button class="btn" onclick="window.location.href='menu.php'">Ir al Menú Principal</button>    

	

    </ul>
  </div>
</body>
</html>
