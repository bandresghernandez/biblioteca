<!DOCTYPE html>
<html>
<head>
  <title>Registar Libro</title>
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

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Registrar Libro</h1>
    
	<form action="../controller/registrolibro.php" method="POST">
<div class="form-group">
  <label for="id">Código de libro:</label>
  <input type="text" id="id" name="id_libro" maxlength="4" required>
</div>

<div class="form-group">
  <label for="titulo">Título:</label>
  <input type="text" id="titulo" name="titulo" maxlength="50" required>
</div>


<div class="form-group">
      <label for="genero">Género:</label>
      <select id="genero" name="genero" required>
        <option value="">Seleccione un Género</option>
		   <option value="autoayuda">Autoayuda</option>
        <option value="novela">Novela</option>
		<option value="cuento">Cuento</option>
		<option value="poesia">Poesía</option>
		<option value="drama">Drama</option>
        <option value="ensayo">Ensayo</option>
		<option value="misterio">Misterio</option>
		<option value="fantasia">Fantasía</option>
		<option value="historica">Histórica</option>
	 	<option value="texto">Terror</option>
		<option value="texto">Texto</option>
      </select>
    </div>


<div class="form-group">
      <label for="tomo">Tomo:</label>
      <select id="tomo" name="tomo" required>
        <option value="">Seleccione un Tomo</option>
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	      </select>
</div>

    <div class="form-group">
      <label for="estado_d">Disponibilidad:</label>
      <select id="estado_d" name="estado_d" required>
    
        <option value="disponible">Disponible</option>
        <option value="no disponible">No disponible</option>
      </select>
    </div>


<div class="form-group">
      <label for="estado">Estado de conservación:</label>
      <select id="estado" name="estado_conservacion" required>
        <option value="">Seleccione un estado</option>
        <option value="malo">Malo</option>
		<option value="bueno">Bueno</option>
		<option value="excelente">Excelente</option>
	
      </select>
    </div>
	
<div class="form-group">
  <label for="id">Editorial:</label>
  <input type="text" id="id" name="id_editorial" maxlength="40">
</div>
	
<div class="form-group">
  <label for="estado_conservacion">Descripción:</label>
  <textarea id="descripcion" name="descripcion" maxlength="200"></textarea>
</div>


    <div class="form-group">
      <button type="submit">Registrar</button>





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
