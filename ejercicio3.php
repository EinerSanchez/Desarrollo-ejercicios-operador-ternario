<?php
// Escribe un script PHP que solicite al usuario ingresar las dimensiones de un terreno agrícola en 
// metros (largo y ancho). Utiliza el operador ternario para determinar si el terreno es lo suficiente
// grande para cultivar ciertos tipos de cultivos. Si el área total del terreno es mayor o igual a 1000 
// metros cuadrados, muestra un mensaje indicando que es adecuado para cultivos extensivos; de lo 
// ontrario, muestra un mensaje indicando que es mas adecuado para cultivos de jardín o huerto. 

//solicta al usuario ingresar dimenciones del terreno 
$largo = readline ("Ingrese el largo del terreno en metros: ");
$ancho = readline ("Ingrese el ancho del terreno en metros: " );
//calcular el area total del terreno 
$areatotal = $largo * $ancho ; 
//mensaje para que tipo de cultivo es apto
$mensaje = ($areatotal >= 1000)? "Es adecuado para cultivos extensivos" : 
"Es más adecuado para cultivos de jardín o huerto";
//mostrar a que tipo de cultivo es apto 
echo "El area total del terreno es de $areatotal metros cuadrados.\n$mensaje ";

?>