<?php
// controller/registrar_usuario_controller.php
 
// Include the file containing the registration logic from the model
include '../model/registrar_model.php';
 
// Get the data from the registration form submitted via the POST method
$email = $_POST['email']; // Get the value of the email field
$password = $_POST['password']; // Get the value of the password field
$confirm_password = $_POST['confirm_password']; // Get the value of the confirm password field
 
// Call the 'registrarUsuario' function defined in the model to process the registration
registerUser($email, $password, $confirm_password);
?>