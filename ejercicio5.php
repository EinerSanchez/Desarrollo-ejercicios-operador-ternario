<?php
// Escribe un programa que solicite al usuario que ingrese su edad. Si la edad es mayor o igual a 18  años, el programa
// debe preguntar si tiene licencia de conducir. Si la respuesta es “si”, el programa debe imprimir “puedes conducir”.
// ”. Si la respuesta es “no”, el programa debe imprimir “Debes obtener una licencia de conducir primero”. 
// Si la edad es menor de 18 años, el programa debe imprimir “No puedes conducir”.

// Solicitar edad
$edad = readline("Ingrese su edad: ");

// Verificar si la edad es mayor o igual a 18 años
if ($edad >= 18) {
    // Pregunta si tiene la licencia de conduccion
    $licencia = readline("¿Tiene licencia de conducir? (si/no): ");

    // verifica respuesta y da resultado si puede conducir o debe obtener licencia
    echo ($licencia == "si")? "Puedes conducir\n" : "Debes obtener una licencia de conducir primero\n";
} else {
    // Da mensaje si es menor de 18 años
    echo "No puedes conducir\n";
}

?>