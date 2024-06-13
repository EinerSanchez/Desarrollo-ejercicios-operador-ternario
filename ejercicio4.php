<?php
//Desarrolla un programa de PHP que permita seleccionar el método de siembra más adecuado  según la estación del año en Colombia. 
//Utiliza el operador ternario para determinar si la estación ingresada por el usuario es adecuada para la siembra directa 
//o si debe utilizar siembra en almacigo. Si la estación es invierno (abrir y noviembre), muestra un mensaje indicando 
//que se debe usar la siembra en almacigo; de lo contrario, muestra un mensaje indicando que se puede realizar la siembra directa.

//obtener estacion indicado por usuario
$estacion = readline("Ingrese el mes para indicar la estacion: ");

//determinar tipo de siembra (estacion invierno abril y nobiembre)
$siembra = ($estacion == "abril" || $estacion == "noviembre") ? "Puede usar siembra en almacigo ya que es invierno" :
 "Puede usar siembra directa";
//Mostrar que tipo de siembra se debe utilizar
echo "Para la estación de el mes $estacion.\n$siembra.";
?>




