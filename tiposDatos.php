<?php

  // Autor: LozanoSoft

  // Lenguaje no tipado, lo que significa que no es necesario
  // especificar explícitamente qué tipo de valor se almacenará
  // en las variables.

  // Números enteros

  $num_1 = 1234; // número decimal
  $num_2 = -123; // un número negativo
  $num_3 = 0123; // número octal (equivale a 83 decimal)
  $num_4 = 0x1A; // número hexadecimal (equivale a 26 decimal)
  $num_5 = 0b11111111; // número binario (equivale al 255 decimal)
  $numero_grande = 922337203685477580; // 18 digitos

  echo $num_1 . "<br>";
  echo $num_2 . "<br>";
  echo $num_3 . "<br>";
  echo $num_4 . "<br>";
  echo $num_5 . "<br>";
  var_dump($numero_grande);
  echo "<br> <br>";

  // Números flotantes (con punto decimal)

  // Desbordamiento de entero
  $numero_grandeF = 9223372036854775808; // Se convierte en float (19 digitos)

  $numF_1 = 1.234;
  $numF_2 = 1.2e3; // 1.2 x 10^3
  $numF_3 = 7E-10 * 1E9; // (7 x 10^-10) x (1 x 10^9)

  var_dump($numero_grandeF);
  echo "<br>" . $numF_1 . "<br>";
  echo $numF_2 . "<br>";
  echo $numF_3 . "<br>";

  // Cadenas de caracteres

  $letra = 'A'; // "A" -> Un solo caracter
  $mensajeComillasSimples = 'Salto de línea: \n '; // Más de un caracter
  $mensajeComillasDobles = "Salto de línea: \n ";
  $mensajeSaltoLinea = "Salto <br> de <br> línea.";

  echo "<br>" . $letra . "<br>";
  echo $mensajeComillasSimples . "<br>";
  echo $mensajeComillasDobles . "<br>";
  echo $mensajeSaltoLinea . "<br>";

  // Booleanos (true / false)

  $booleanoT = true; // True / TRUE / 1
  $booleanoF = 0; // False / FALSE / 0

  echo "<br>" . $booleanoT . "<br>";
  echo $booleanoF . "<br>";

  // Variable sin valor

  $varN = NULL; // null / Null
  echo "<br>" . $varN . "<br>";

  // Arreglos

  // Se puede emplear como un array, lista (vector),
  // tabla asociativa (tabla hash -> una implementación de un mapa),
  // diccionario, colección, pila, cola, etc.

  // Array (mapa ordenado) / lista (vector)
  // Asocia un índice con un valor (cualquier tipo)

  $array_1 = array("manzana", 789, 'K', 12.589);
  $array_2 = ["manzana", "plátano", "naranja", "mandarina"]; // A partir de PHP 5.4

  echo "<br>";
  var_dump($array_1); // Imprime la información específica de una variable
  echo "<br>";
  print_r(array_values($array_2)); // Imprime información de una variable
  echo "<br>";

  $array_2[] = "durazno"; // Agregar un elemento al array

  print_r(array_values($array_2));
  echo "<br>";

  unset($array_2[4]); // Elimina un elemento del array
  print_r(array_values($array_2));
  echo "<br>";

  echo $array_2[1] . "<br>";

  // Tabla hash (mapa) / diccionario
  // Asocia una clave (int o string) con un valor (cualquier tipo)

  $array_3 = [
    "matricula" => "datos personales", // No deben haber dos claves iguales
    476 => "$1,895 pesos",
    483 => 1895
  ];

  $array_3["num"] = 36; // Agrega elemento a la tabla hash

  echo "<br>";
  var_dump($array_3);
  echo "<br>" . $array_3[476] . "<br>" . $array_3["matricula"] . "<br>";

  // Colección
  // Se puede acceder por el índice o por la clave del elemento

  $array_4 = [
         "a",
    "hola" => "mundo",
         "b",
    6 => "c",
         "d",
         100.9,
    2 => "e",
         789
  ];

  echo "<br>";
  var_dump($array_4);
  echo "<br>";

  // Constantes
  // Es un identificador (nombre) para un valor

  // Definidas manualmente

  define("MENSAJE", 'hola mundo');
  define("NUM", 125);
  const NUMFLOAT = 125.569;
  const CONSTBOOL = True;

  echo "<br>" . MENSAJE;
  echo "<br>" . NUM;
  echo "<br>" . NUMFLOAT;
  echo "<br>" . CONSTBOOL . "<br>";

  // Predefinidas

  echo "<br>" . __LINE__; // Número de línea actual del fichero
  echo "<br>" . __DIR__; // Directorio del fichero
  echo "<br>" . __FILE__; // Ruta completa del fichero

  // Es posible almacenar en una variable un tipo de valor diferente
  // al almacenado originalmente.

  $saludos = "Suscríbete al canal";
  echo "<br> <br>" . $saludos;
  $saludos = 100;
  echo "<br>" . $saludos;
  $saludos = 3.1416;
  echo "<br>" . $saludos . "<br>";
  $saludos = ['Dale Like', "Suscríbete", "Comparte en redes sociales"];
  print_r(array_values($saludos));

?>
