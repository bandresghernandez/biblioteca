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
<body>
    <h1>Búsqueda Libro</h1>
    <form action="../controller/buscarlibro.php" method="POST">
        <label for="id_libro">Código:</label>
        <input type="text" id="id_libro" name="id_libro" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
