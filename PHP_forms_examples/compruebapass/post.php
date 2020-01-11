<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <?php if (!isset($_POST["pass"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Personal Info</legend>
            <span>Usuario:</span><input type="text" name="usuario" required><br>
            <span>Contraseña</span><input type="password" name="pass" required><br>
            <p><input type="submit" value="Send"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php
            echo "<h3>Showing data coming from the form</h3>";
            if($_POST["usuario"]=="pepe" && $_POST["pass"]=="12345678"){
                echo "usuario y contraseña correcta";
            }
            else{
                echo "error en el login. Revise usuario y contraseña";
            }
        ?>

      <?php endif ?>

  </body>
</html>