<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIROMENT INFO</title>
</head>

<body>
    <?php   //Comienzo del bloque PHP
        $array=["A","B","C","D"];   //Declara el array con los siguientes elementos
        echo "<ul>";    //Comienza una lista sin orden
        for ($i=sizeof($array)-1;$i>=0;$i--) {  //Comienzo del bucle que recorre el array
            echo "<li>$array[$i]</li> ";    //Crea un nuevo item en la lista por cada elemento del array
        };  //Fin del bucle que recorre el array
        echo "</ul>";   //Cierra la lista sin orden
            ?>  <!--Fin del bloque PHP-->
</body>

</html>