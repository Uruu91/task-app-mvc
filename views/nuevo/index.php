<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista Main</title>
  <link rel="stylesheet" href="<?php echo constant("URL");?>public/css/default.css">
</head>
<body>
<header>
    <?php include "views/header.php"; ?>
  </header>

  <h1>Esta es la vista de nuevo</h1>

  <form action="<?php echo constant("URL"); ?>nuevo/registrarAlumno" method="POST">
    <div>matricula: <input type="text" name="matricula" id="" required></div>
    <div>nombre: <input type="text" name="nombre" id="" required></div>
    <div>apellido: <input type="text" name="apellido" id="" required></div>
    <input type="submit" value="Registrar nuevo alumno">
  </form>
  <footer>
    <?php include "views/footer.php"; ?>
  </footer>
</body>
</html>