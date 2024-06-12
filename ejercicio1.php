<?php 
//hacer un progama que calcule el total a pagar por la compra de camisas. Si compran 3 camisas o mas 
//se debe aplicar descuento del 20% sobre el total de la compra y si son menos de 3 camisas un descuento de 10%

// pedimos que ingrese precio y cantidad comprada de camisas

$preciocamisa = readline("Ingrese precio: ");
$cantidad = readline("Ingrese cantidad de camisas compradas: ");

//calcular total a pagar de pedido 

$total = $preciocamisa * $cantidad; 
//total a pagar sin descuento
echo "Total a pagar sin descuento es: $total \n";
//aplicamos descuento segun la cantidad de camisas 
$descuento = ($cantidad >= 3) ? $total * 0.2 : $total * 0.1;

//mostrar total a pagar sin descuento y con descuento
$total2 = $total - $descuento;
echo "Descuento aplicado: $descuento\n";
echo "Total a pagar con descuento es: $total2 \n"; 

?>