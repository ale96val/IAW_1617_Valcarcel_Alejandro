<!--Exercise 5: Loops II
Create a 10 x 10 table where the background color is gray for even rows and red for odd rows. The cells' dimensions must be 50x50-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX5</title>
</head>

<body>
    <table>
        <!--Comienzo de una tabla-->
        <?php   //Comienzo del bloque PHP
            $tam=10;    //Declara la variable tam con valor incial igual a diez
            $celda=1;   //Delcara la variable celda con valor inicial igual a uno
            for ($i=0;$i<$tam;$i++){    //Comienzo de un bucle for, para la variable i, desde que vale cero hasta que valga lo mismo que la variable tam, incrementando una unidad cada vez
                if ($i%2==0){   //Comienzo de condicion if, si el numero almacenado en i es par
                            echo "<tr style='width:50px; height:50px;border:1px solid black;background-color:grey;'>";  //Crea una fila de 50x50 con borde y con color de fondo gris
                             for ($j=0;$j<$tam;$j++){   //Bucle for para añadir las celdas, desde que la variable j es igual a cero hasta que valga lo mismo que la variable tamaño, incrementado una unidad cada vez
                            echo "<td style='width:50px; height:50px;border:1px solid black;'></td>";   //Añade una celda de 50x50, con borde
                            $celda++;   //Incrementa la variable celda en una unidad
                }   //Fin del bucle for
                            }else{  //Continuacion del condicional if anterior. En caso de que no se cumpla que el numero es par
                            echo "<tr style='width:50px; height:50px;border:1px solid black;background-color:red;'>";   //Crea una fila de 50x50 con borde y con color de fondo rojo
                                            for ($j=0;$j<$tam;$j++){    //Bucle for para añadir las celdas, desde que la variable j es igual a cero hasta que valga lo mismo que la variable tamaño, incrementado una unidad cada vez
                            echo "<td style='width:50px; height:50px;border:1px solid black;'></td>";   //Añade una celda de 50x50, con borde
                            $celda++;      //Incrementa la variable celda en una unidad
                }   //Fin del bucle for
                        }   //Fin del condicional if y del else
                echo "</tr>";   //Fin de la fila
            }   //Fin del bucle for inicial
            ?>
            <!--Fin del bloque PHP-->
    </table>
    <!--Fin de la tabla-->
</body>

</html>