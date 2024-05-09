<?php
// core/conexion.php

// Database connection parameters
$host = "localhost";            // Hostname or IP address of the database server
$usuario = "root";              // Username for database authentication
$contrasena = "";               // Password for database authentication
$base_datos = "login_web";      // Name of the database to connect to

// Create a new MySQLi object for database connection
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Check if the connection to the database was successful
if ($conexion->connect_error) {
    // If there was an error, terminate the script execution and display the error message
    die("Error en la conexión: " . $conexion->connect_error);
}
?>