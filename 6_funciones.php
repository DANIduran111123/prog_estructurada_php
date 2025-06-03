<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones en php</title>
</head>
<body>
    <h1>funciones</h1>
    <p>una funcion es un bloque de codigo que introducimos en nuestra pagina y que puede ser utilizado a lo largo de todo nuestro codigo php. La principal ventaja de las funciones asi que nos permite ahorrar codigo.</p>
    <p>para definir funciones se emplea la sentencia function. Ejemplo: function suma(4)</p>
    <p>Las funciones pueden recibir tantos argumentos como sean necesarios, separandolos con comas.</p>
    
    <?php
        function sumar($x,$y): mixed
        {
            $z = $x + $y;
            return $z;
        }
            //invoco o llamo la funcion sumar
            $resultado = sumar(5, 12);
             echo "resultado: ". $resultado;
    ?>
</body>
</html>