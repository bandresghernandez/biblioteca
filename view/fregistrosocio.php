<!DOCTYPE html>
<html>
<head>
  <title>Registrar Socio</title>
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
    .form-group input[type="date"],
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
  <h1>Registrar Socio</h1>
  <form method="POST" action="../controller/registrosocio.php">
  
  	 <div class="form-group">
      <label for="tipo">Rol:</label>
	    
           <select id="tipo" name="tipo" required>
		     <option value="">Seleccione un rol</option>
		   	<option value="Alumno">Alumno</option>
             <option value="Docente">Docente</option>
	
	
      </select>
    </div>
  
  <div class="form-group">
  <label for="id_prestamo">CI:</label>
  <input type="text" id="ci" name="ci" maxlength="8" required>
</div>
  
  <div class="form-group">
  <label for="id_libro">Nombre:</label>
  <input type="text" id="nombre" name="nombre" maxlength="15" required>
</div>
  

<div class="form-group">
  <label for="id_autor">Apellido:</label>
  <input type="text" id="apellido" name="apellido" maxlength="15" required>
</div>
	
	
	
  
  <div class="form-group">
  <label for="grupo">Grupo:</label>
  <input type="text" id="grupo" name="grupo" maxlength="5">
</div>
  
  <div class="form-group">
      <label for="sexo">Sexo:</label>
      <select id="sexo" name="sexo" required>
      <option value="">Seleccione sexo</option>
      <option value="M">M</option>
      <option value="F">F</option>
>

      </select>
    </div>
 
    <div class="form-group">
      <label for="fecha_prestamo">Fecha de nacimiento:</label>
      <input type="date" id="fecha_nac" name="fecha_nac"  pattern="\d{4}/\d{2}/\d{2}" placeholder="yyyy/mm/dd" required>
    </div>
	
	
	
	
	

<div class="form-group">
  <label for="fecha_devolucion">Teléfono:</label>
  <input type="text" id="fijo" name="fijo" maxlength="9">
</div>
	
<div class="form-group">
  <label for="fecha_devolucion">Email:</label>
  <input type="text" id="email" name="email" maxlength="40">
</div>

	
    <div class="form-group">
      <button type="submit">Registrar</button>    
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
    <a href="fsocio.php" class="button">Ir al Menú</a>
  </div>
</body>
</html>
