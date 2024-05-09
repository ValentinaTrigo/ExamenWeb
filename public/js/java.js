   $(document).ready(function() {
      $('.container form').submit(function(e) {
         e.preventDefault();
         var formData = $(this).serialize();
         $.post('../controller/login_controller.php', formData, function(response) {
            if (response.trim() === 'true') {} else {
               alert('Usuario no registrado o contraseña incorrecta');
            }
         });
      });
   });
