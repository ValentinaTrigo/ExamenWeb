<?php
// controller/login_controller.php
include '../model/login_model.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
// Verify user credentials
$login_successful = login($email, $password);
 
if ($login_successful) {
    // Redirect the user to the home page
    header("Location: ../login.php");
    exit();
} else {
    // Show an error message to the user
    echo "Usuario o contraseña incorrecta";
}
?>