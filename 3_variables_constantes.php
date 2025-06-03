<!DOCTYPE html>

<html lang="en">
 <head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Variables y constantes en PHP</title>

</head>
<body>
 <hl>Variables  y constantes en php</hl>
 <?php
 //las variables se representan enteponiendo el simbolo s a la palabra que se use como variable.
 //php es sensitive case
 //las variable no puede empezar con un numero
 //en php no es necesario especificar el tipo de variable, pero si se debe saber cuando utilizar las comillas, para el caso de variables de tipo cadena o string.

// Asignamos a la variable a el valor 5

$a = 5;

// Asignamos a la variable bel valor 7 como cadena.

$h = "7";

echo"<h2>variables</h2>";

// mostrar el valor de la variable a

echo ($a);

echo"<br>";

// mostrar el valor de la variable b

echo ($b);

echo"<br>";

echo"<h2>variables</h2>";

/*El valor de una constante no cambia o se mantiene fijo duran la ejecucion de una pagina*/ 
/*la forma de defenir las constantes en php, es mediante el uso de la instruccion define*/

//creamos una constante llamada capital_colombia ,cuyo valor es bogota"
define(constant_name:"capitan_colombia",value:"bogota");
?>
</body>
</html>


