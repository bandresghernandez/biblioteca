<!DOCTYPE html>
<html>
<head>
  <title>Buscar Libro</title>
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
      color: white; /* Set the text color of the h1 element to white */
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

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group button {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Buscar Libro</h1>
  <form method="POST" action="../controller/busquedaxcodigo.php">
	
<div class="form-group">
  <label for="id_libro">Código del libro:</label>
  <input type="text" id="id_libro" name="id_libro" maxlength="4">
</div>
    <div class="form-group">
      <button type="submit">Buscar</button>  
    </div>
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
    <a href="fbusquedalibro.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>
