<?php

function conectar()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "obligatoriophp";

    // Crear una conexión
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    return $conn;
}



