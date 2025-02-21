<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn_isdelivn-net/npm/bootstrap@5-1.3/dist/css/bootstrep-min-css "rel="stylesheet"
    integrity="sha384-18-E4kWBq781YhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBody12QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>

      <center>
        <h1>HOME</h1>
      </center>

      <a href="CerrarSecion.php" class="btn btn-danger">Cerrar Sesion</a>
      <?php
        echo "usuario:".$_SESSION["admin"];
        echo "clave:".$_SESSION["clave"];
      ?>
      </body>
</html>