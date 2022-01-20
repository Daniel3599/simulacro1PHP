<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Simulacro 1</title>
  </head>
  <body>
    <?php
      include "Jugador.php";

      $jugador1 = new Jugador("Pepe", 314, 25);
      echo $jugador1 -> verPerfil();
      echo $jugador1 -> adulto();
     ?>
  </body>
</html>
