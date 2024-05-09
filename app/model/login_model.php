<?php
// model/login_model.php

// Include the connection file to connect to the database
include $_SERVER['DOCUMENT_ROOT'] . '/ExamenWeb/core/conexion.php';

// Define the 'login' function that takes email and password as parameters
function login($email, $password) {
    
    global $conexion; // Access the connection variable defined in the connection file

    // Prepare the SQL query to select the user by their email
    $stmt = $conexion->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email); // Bind the parameter with the email value
    $stmt->execute(); // Execute the prepared query
    $result = $stmt->get_result(); // Get the result of the query

    // Check if any user was found with the provided email
    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc(); // Get user data as an associative array
        // Verify the password using the password_verify function
        if (password_verify($password, $user['password'])) {
            return true; // The password is correct.
        } else {
            return false; // The password is incorrect.
        }
    } else {
        return false; // No user was found with the provided email.
    }

    $conexion->close(); // Close the database connection
}
?>