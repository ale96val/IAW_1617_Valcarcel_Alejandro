<!--In this PHP exercise, you will put all the loops through their paces. Write a script that will print the following to the browser:

abc abc abc abc abc abc abc abc abc

xyz xyz xyz xyz xyz xyz xyz xyz xyz

1 2 3 4 5 6 7 8 9

Item A
Item B
Item C
Item D
Item E
Item F
Create the 'abc' row with a while loop, the 'xyz' row with a do-while loop, and the last two sections with for loops. Remember to include HTML and source code line breaks in your output. No arrays allowed in this solution.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX4</title>
</head>

<body>
    <table>
        <!--Comienza la tabla-->
        <?php       //Comienza el bloque PHP
            echo "<table>";
            $abc=0;     //Declara la variable abc con un valor inicial 0
            echo "<tr>";    //Crea una nueva fila
            while ($abc < 9){   //Bucle While. Mientras la variable abc sea menos que nueve entonces
                echo "<td>abc</td>";    //Crea nueva celda
                $abc++; //Incrementa en uno la variable abc
            }  //Fin del bucle While
            echo "</tr>";   //Cierra la fila
            $xyz=0;     //Crea una nueva variable de nombre xyz con valor inicial 0
            echo "<tr>";    //Inicia nueva fila
                do {        //Inicio del bucle Do. Crea nueva celda, e incrementa xyz en uno, mientras xyz sea menos que 9
                    echo "<td>xyz</td>";    //Crea una nueva celda
                    $xyz++;     //Incrementa en uno xyz
                } while ($xyz < 9);     //Condicion While del bucle do y fin del bucle
            echo "</tr>";       //Cierra la fila
            $num=1;     //Crea una nueva variable num cuyo valor inicial es uno
            echo "<tr>";    //Inicia una nueva fila
                for ($num=1;$num<=9; $num++) {      //Bucle for. Desde que num vale uno, hasta que valga 9, aumentando una unidad cada vez, hacer
                    echo "<td>$num</td>";       //Añade una nueva celda
                }       //Fin del bucle for
            echo "</tr>";       //Cierra la fila
            echo "</table>";       //Cierra la tabla
            echo "<table>";     //Comienza una nueva tabla
            $item=1;        //Crea una variable item cuyo valor inicial es uno
                for ($item=1;$item<=6; $item++){    //Inicio de un bucle for, que hará lo siguiente desde que item valga uno hasta que valga seis
                    switch ($item) {        //Comienzo de condicion switcht según el valor de la variable item
                        case 1:     //En el caso de que item valga uno
                            echo "<tr><td>$item. Item A</td></tr>"; //Añade nueva fila con una celda dentro y que empiece por el numero en item
                            break;      //Evita que siga comprobando el resto de casos
                        case 2:     //En el caso de que item valga dos
                            echo "<tr><td>$item. Item B</td></tr>";
                            break;
                        case 3:     //En el caso de que item valga tres
                            echo "<tr><td>$item. Item C</td></tr>";
                            break;
                        case 4:     //En el caso de que item valga cuatro
                            echo "<tr><td>$item. Item D</td></tr>";
                            break;
                        case 5:     //En el caso de que item valga cinco
                            echo "<tr><td>$item. Item E</td></tr>";
                            break;
                        case 6:     //En el caso de que item valga seis
                            echo "<tr><td>$item. Item F</td></tr>";
                            break;
                            }       //Fin de la condicion swicht
                }       //Fin del bucle for
            echo "</table>";        //Fin de la tabla
            ?>
            <!--Fin del bloque PHP-->
    </table>
    <!--Fin de la tabla-->
</body>

</html>