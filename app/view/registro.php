<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro de Usuarios</title>
   <link rel="stylesheet" href="/ExamenWeb/public/css/styles.css">
</head>

<body>
   <div class="container">
      <h2>Registro de Usuarios</h2>
      <form action="../controller/registrar_controller.php" method="post">
         <input type="email" name="email" placeholder="Email" required><br><br>
         <input type="password" name="password" placeholder="Contraseña" required><br><br>
         <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br><br>
         <button type="submit">Registrarse</button><br><br>
         <a href="login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
      </form>
   </div>
</body>

</html>