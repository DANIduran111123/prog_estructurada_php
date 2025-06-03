<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
    <h1>Operadores</h1>

    <h2>Aritmeticos</h2>

    <?php
        $x = 9;
        $y = 3;
        $z = 5;

        $suma = $x + $y;
        $resta = $x - $z;

        echo "la suma es: ". $suma;
    ?>

    <h2>De comparacion</h2>
<?php
        $x = 9;
        $y = 3;

        echo ($x == $y);
    ?>

<h2>Logicos</h2>

<?php
        $x = 9;
        $y = 3;

        if( $x == 9 && $y==3)
        {
            echo "Estas en lo correcto";
        }
    ?>

<h2>De union de cadenas</h2>

<?php
        $nombre = "Daniel";
        $apellido = "Abril";

        $nombre_completo = $nombre."_".$apellido;

        
            echo $nombre_completo;
    ?>

</body>
</html>