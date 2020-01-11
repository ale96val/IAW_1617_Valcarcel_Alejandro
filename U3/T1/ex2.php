<!--Exercise 2: Variable content

When you are writing scripts, you will often need to see exactly what is inside your variables.

For this PHP exercise, think of the ways you can do that, then write a script that outputs the following, using the echo statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX2</title>
</head>

<body>
    <table>
        <!--Comienzo de tabla-->
        <?php   //Comienzo del bloque PHP
            $nombre="Harry";        //Declara la variable nombre cuyo valor es Harry
            $num=28;                //Declara la variable num cuyo valor es 28
            $null= NULL;            //Declara la variable null como nula
            var_dump($nombre);      //Imprime el tipo de variable, su longitud, y el contenido
            echo "</br>";           //Realiza un salto de linea
            print_r($nombre);       //Imprime el contenido de la variable nombre
            echo "</br>";           //Salto de linea    
            var_dump($num);         //Imprime el tipo de variable, su longitud, y el conteniod
            echo "</br>";           //Salto de linea
            var_dump($null);        //Imprime NULL en pantalla ya que la variable es nula
            ?>
            <!--Fin del bloque PHP-->
    </table>
    <!--Fin de la tabla-->
</body>

</html>