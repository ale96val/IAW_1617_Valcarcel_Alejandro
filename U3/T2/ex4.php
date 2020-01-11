<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIROMENT INFO</title>
</head>

<body>
    <?php   //Inicio del bloque PHP
        $array=[["A" =>1,"B"=>2,"C"=>3],["D"=>4,"E"=>5,"F"=>6],["G"=>7,"H"=>8,"I"=>9]]; //Declaración del array
        echo "<table style='border: 1px solid black;'>";    //Crea una nueva tabla con borde alrededor
        for ($i=0;$i<sizeof($array);$i++){     //Inicio del bucle que recorre el array indexado
            echo "<tr>";    //Añade una nueva fila por cada elemento del array
            foreach ($array[$i] as $k => $v) {  //Para cada nueva fila, recorre el array asociado contenido en esa posicion del array indexado
                echo "<td style='width:50px; height:50px;'>$k:".$v."</td> ";    //Añade una nueva celda de 50pxX50px con el valor del array
            }   //Fin del bucle que saca el valor del array asociado
            echo"</tr>";    //Cierra la nueva fila
        }   //Fin del bucle que recorre el array indexado
        echo "</table>";    //Cierra la tabla
        ?>  <!--Fin del bloque PHP-->
</body>

</html>