<?php

//Crea un programa PHP que solicite la cantidad de articulo comprados y 
//el precio unitario de cada articulo. Utiliza el operador ternario 
//para calcular el descuento basado en la siguiente regla: 
//Si se compran 10 o más artículos, se aplica un descuento de 10% 
//sobre el total. El programa debe mostrar el total a pagar después de aplicar el descuento.

//solicitamos la cantidad y precio unitario
$cantidad = readline("Ingrese cantidad de articulo comprados: ");
$precio = readline("Ingrese precio unitario de este articulo: ");

//calcular total a pagr sin descuento

$total = $cantidad * $precio; 
//total a pagar sin descuento
echo "Total a pagar sin descuento: $total \n";

//aplicamos el descuento segun la cantidad de articulos 
$descuento = ($cantidad >= 10) ? $total * 0.1 : 0; 

//mostrar descuento y total a pgar con descuento
$total2 = $total - $descuento;
echo "Descuento aplicado es de: $descuento\n";
echo "Total a pagar con descuento es: $total2\n";
?>