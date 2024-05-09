<?php
// model/registrar_usuario_model.php

// Include the connection file to connect to the database
include $_SERVER['DOCUMENT_ROOT'] . '/ExamenWeb/core/conexion.php';

// Define the 'registerUser' function that takes email, password, and password confirmation as parameters
function registerUser($email, $password, $confirm_password) {
    global $conexion; // Access the connection variable defined in the connection file

    // Check if the password and password confirmation match
    if ($password != $confirm_password) {
        echo "Las contraseñas no coinciden.";
        // Redirect the user to the registration page with an error message
        header("refresh:1;url=../view/registro.php");
        exit(); // Terminate script execution
    }

    // Encrypt the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Construct the SQL query to insert a new user into the database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

    // Execute the SQL query and check if it was successful
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario Registrado.";
        // Redirect the user to the login page after successful registration
        header("refresh:1;url=../view/login.php");
    } else {
        // Show an error message if there was a problem during registration
        echo "Error registering user: " . $conexion->error;
    }

    // Close the database connection
    $conexion->close();
}
?>