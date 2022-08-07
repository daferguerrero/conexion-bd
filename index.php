<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar usuario</title>
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,300;1,500&display=swap"
    rel="stylesheet">
</head>

<!--
  1. Crear contenido html
  2. Dar estilos
  3. Crear base de datos en mysql
  4. Crear conexion base de datos (conexion-bd.php)
  5. Crear registrar.php
 -->

<body>
  <form method="post">
    <h1>¡Suscribete!</h1>
    <input type="text" name="username" placeholder="Nombre de usuario">
    <input type="email" name="email" placeholder="e-mail">
    <input type="submit" name="register" value="Enviar">
  </form>

  <?php
        include_once ("registrar.php");
  ?>

</body>
</html>