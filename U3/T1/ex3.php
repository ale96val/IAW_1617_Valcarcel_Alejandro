<!--Exercise 3: If Statement

Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
</head>

<body>
    <table>
        <!--Comienzo de tabla-->
        <?php       //Comienzo del bloque PHP
        $month=date("m");       //Crea la variable mes y almacena en ella el mes actual
        $month= intval($month);   //Convierte el mes en un numero
        if ($month==8) {        //Condicion, si el mes es el ocho entonces
          echo "It´s August, so it´s really hot.";      //Imprime la sentencia en pantalla
        } else {        //En caso de que no sea 8 el numero del mes
          echo "Not August, so at least not in the peak of the heat.";      //Imprime la sentencia en pantalla
        }
            ?>
            <!--Cierra el bloque de PHP-->
    </table>
    <!--Cierra la tabla-->
</body>

</html>