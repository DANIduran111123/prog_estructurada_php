<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control y Funciones de Manipulación de Cadenas</title>
</head>
<body>
    <h1>Estructuras de control</h1>

    <h2>Instrucciones condicionales</h2>
    <?php
        $color = "Rojo";

        if($color == "Rojo") {
            print("Efectivamente, el color es Rojo!");
        }
    ?>

    <h2>Instrucciones repetitivas</h2>
    <h3>While</h3>
    <?php
        $x = 10;
        while($x > 0) {
            echo "<big>";
            print("Número: ". $x);
            echo "<br>";
            echo "<hr>";
            $x--;
        }
    ?>

    <h3>For</h3>
    <?php
        for($x = 5; $x <= 10; $x++) {
            echo "Número: " . $x . "<br>";
        }
    ?>

    <h1>Funciones para Manipular Cadenas</h1>

    <h2>Función substr()</h2>
    <p>La función <code>substr()</code> se usa para devolver una parte de una cadena.</p>
    <pre>
    <?php
        $cadena = "Hola Mundo";
        $subcadena = substr($cadena, 0, 4); // Devuelve "Hola"
        echo "Subcadena: " . $subcadena;
    ?>
    </pre>

    <h2>Función ord()</h2>
    <p>La función <code>ord()</code> devuelve el valor ASCII de un carácter.</p>
    <pre>
    <?php
        $caracter = "A";
        $valor_ascii = ord($caracter); // Devuelve 65
        echo "Valor ASCII de '$caracter': " . $valor_ascii;
    ?>
    </pre>

    <h2>Función print()</h2>
    <p>La función <code>print()</code> imprime una cadena y siempre devuelve 1.</p>
    <pre>
    <?php
        print("Hola desde print!");
    ?>
    </pre>

    <h2>Función sprintf()</h2>
    <p>La función <code>sprintf()</code> devuelve una cadena formateada.</p>
    <pre>
    <?php
        $nombre = "Luis";
        $edad = 25;
        $resultado = sprintf("Nombre: %s, Edad: %d", $nombre, $edad);
        echo $resultado;
    ?>
    </pre>

    <h2>Función strtolower()</h2>
    <p>La función <code>strtolower()</code> convierte una cadena a minúsculas.</p>
    <pre>
    <?php
        $texto = "HOLA MUNDO";
        $texto_minusculas = strtolower($texto); // Devuelve "hola mundo"
        echo "Texto en minúsculas: " . $texto_minusculas;
    ?>
    </pre>

    <h2>Función strtoupper()</h2>
    <p>La función <code>strtoupper()</code> convierte una cadena a mayúsculas.</p>
    <pre>
    <?php
        $texto = "hola mundo";
        $texto_mayusculas = strtoupper($texto); // Devuelve "HOLA MUNDO"
        echo "Texto en mayúsculas: " . $texto_mayusculas;
    ?>
    </pre>

    <h2>Función ereg()</h2>
    <p>La función <code>ereg()</code> se usaba para buscar expresiones regulares (obsoleta en PHP 5.3.0).</p>
    <pre>
    <?php
        $cadena = "Hola Mundo";
        if (ereg("Hola", $cadena)) {
            echo "'Hola' encontrado en la cadena.";
        }
    ?>
    </pre>

    <h2>Función eregi()</h2>
    <p>La función <code>eregi()</code> es similar a <code>ereg()</code>, pero es insensible a mayúsculas (obsoleta en PHP 5.3.0).</p>
    <pre>
    <?php
        $cadena = "hola mundo";
        if (eregi("HOLA", $cadena)) {
            echo "'HOLA' encontrado en la cadena.";
        }
    ?>
    </pre>
</body>
</html>
