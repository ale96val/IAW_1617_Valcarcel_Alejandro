<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIROMENT INFO</title>
</head>

<body>
        <?php   //Comienzo del bloque PHP
            $array=["56","77","199","21","34","123","43"];  //Declara el valor del array
            $max=$array[0];    //Crea la variable max y guarda en ella el valor del primer elemento del array
            for ($i=1;$i<sizeof($array);$i++) {     //Comienzo del bucle que recorre el array
                if ($max <= $array[$i]){    //Condicion if: si el valor guardado en la variable max es menor que el elemento del array entonces
                    $max=$array[$i];    //Guarda en la variable max el elemento actual del array
                }   //Fin de la condición if
            }   //Fin del bucle que recorre el array
            echo "<p>The max numer in the array is ".$max.".";  //Imprime un párrafo con el valor maximo contenido en el array
            ?>  <!--Fin del bloque PHP-->
</body>

</html>