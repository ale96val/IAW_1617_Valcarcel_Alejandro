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

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php if (!isset($_POST["ciudad"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Inserte Ciudad</legend>
            <span>Ciudad:</span><input type="text" name="ciudad" required><br>
            <p><input type="submit" value="Send"></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['ciudad']. Coming from a form submit -->
      <?php else: ?>

<?php
            echo "<h3>Showing data coming from the form</h3>";
            //CREATING THE CONNECTION
      	    $connection = new mysqli("localhost", "root", "201296", "TalleresFaber");
           //TESTING IF THE CONNECTION WAS RIGHT
           if ($connection->connect_errno) {
           	printf("Connection failed: %s\n", $connection->connect_error);
	        exit();
           }
	   $consulta= "SELECT * FROM CLIENTES WHERE DIRECCION LIKE '%".$_POST['ciudad']."%'";
	   $result = $connection->query($consulta);
	   if (!$result) {
 		echo "Query Error";
           } else {
		echo "Clientes en esa ciudad:";
           echo "</br>";
           echo "<table>";
           while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->CodCliente."</td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Apellidos."</td>";
              echo "<td>".$obj->DNI."</td>";
              echo "<td>".$obj->Direccion."</td>";
              echo "<td>".$obj->Telefono."</td>";
              echo "</tr>";
          }
           echo "</table>";
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
	   }
		
        ?>


      <?php endif ?>

  </body>
</html>