<!--Write a script to reproduce the output below.

Manipulate only one variable using no simple arithmetic operators to produce the values given in the statements.

Hint: In the script each statement ends with "Value is now $variable."

Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>

<body>
    <table>
        <!--Comienzo de tabla-->
        <?php           //Inicio del bloque PHP
            $var=8;     //Establece la variable var como 8
            echo "<p>Value is now $var</p>";        //Imprime el valor de la variable var
            $var=$var+2;            //Suma dos a la variable Var
            echo "<p>Add 2. Value is now ".($var)." </p>";
            $var=$var-4;        //Resta 4 a la variable var
            echo "<p>Subtract 4. Value is now $var</p>";
            $var=$var*5;        //Multiplica por cinco la variable var
            echo "<p>Multiply by 5. Value is now $var</p>";
            $var=$var/3;        //Divide entre tres la variable var
            echo "<p>Divide by 3. Value is now $var</p>";
            $var++;             //Suma uno a la variable var
            echo "<p>Increment value by one. Value is now $var</p>";
            $var--;             //Resta uno a la variable var
            echo "<p>Decrement value by one. Value is now $var</p>";
            
            ?>
            <!--Fin del bloque PHP-->
    </table>
    <!--Fin de la tabla-->
</body>

</html>