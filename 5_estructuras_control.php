<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>

    <h2>Instrucciones condicinales</h2>
    <?php
        $color = "Rojo";

        if($color == "Rojo")
        {
            print("Efectivamene, el color es Rojo!");
        }
    ?>

     <h2>Instrucciones repetitivas</h3>
     <h3>While</h3>
    <?php
        $x = 10;
        while($xx>0)
        {
            echo "<big>";
            print("Numero: ". $x);
            echo "<br>";
            echo "<hr>";
            $x--;
        }
    ?>

    <h3>for</h3>
    <?php
        for($x=5; $x<=10; $x++)
        {
            echo "Numero: ", $x, "<br>";
        }
    ?>
</body>
</html>