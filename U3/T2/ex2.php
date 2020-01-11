<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIROMENT INFO</title>
</head>

<body>
        <?php   //Comienzo del bloque PHP
            $cadA=["2","4","6","8"];    //Declara el array cadA con los elementos que le siguen
            $cadB=["7","8","9","10"];   //Declara el array cadB con los elementos que le siguen
            $cadAB=[];    //Declara el array cadAB vacío
            for ($i=0;$i<sizeof($cadA);$i++) {  //Comienzo del bucle que recorre el array cadA
                $cadAB[]=$cadA[$i];     //Añade cada elemento de cadA al array cadAB
            }   //Fin de bucle que recorre el array A
            for ($x=0;$x<sizeof($cadB);$x++) {  //Comiezo del bucle que recorre el array cadB
                $cadAB[]=$cadB[$x];     //Añade cada elemento de cadB al array cadAB
            }   //Fin del bucle que recorre el array B
            var_dump($cadAB);   //Saca en pantalla toda la información y contenido sobre el array cadAB
        ?>  <!--Fin del bloque PHP-->
</body>

</html>