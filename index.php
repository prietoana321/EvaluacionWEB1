<?php 

//ACTIVIDAD TALLER NRO 1
//Ana Cecilia Prieto Contreras
//Grupo #1

//Ejercicio 1
/*
echo("calculadora aritmetica super eficiente");


$primerNumero=36.7;
$segundoNumero = 80;

$suma=$primerNumero+ $segundoNumero;
$resta=$primerNumero-$segundoNumero;
$multiplicacion=$primerNumero*$segundoNumero;
$division=$segundoNumero/$primerNumero;
echo("Super calculadora 2020 ");
echo("<br>");
echo("la suma de: ".$primerNumero."+".$segundoNumero."=".$suma);
echo("<br>");
echo("la suma de: ".$primerNumero."-".$segundoNumero."=".$resta);
echo("<br>");
echo("la suma de: ".$primerNumero."*".$segundoNumero."=".$multiplicacion);
echo("<br>");
echo("la suma de: ".$primerNumero."/".$segundoNumero."=".$division);
*/
/*
//Ejercicio 2
2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de
masa corporal, basado en la formula 𝐈𝐌𝐂 =
𝑷𝒆𝒔𝒐
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)
Ejecute su programa para un usuario cuyo peso es de 85KG y cuya estatura es de
1.78m y muestre en pantalla el resultado obtenido*/
/*
echo("Aplicativo BODYTECH");
echo("<br>");

$usuario="Ana prieto";
$peso=47;
$estatura=1.56;
$altura=$estatura*$estatura;
$indiceMC=$peso/$altura;

if($indiceMC<=18.4){
    echo("Señor usuario,tiene insuficiencia de peso");
    echo("<br>");
    echo($indiceMC);

}else if($indiceMC>=18.5 && $indiceMC<=24.9){
    echo("Señor usuario, posee un peso normal");
    echo("<br>");
    echo($indiceMC);

}else if($indiceMC>=25 && $indiceMC<=29.9){
    echo("usted posee sobrepeso");
    echo("<br>");
    echo($indiceMC);
}else if($indiceMC>=30 && $indiceMC<=34.9){
    echo("Obesidad 1");
    echo("<br>");
    echo($indiceMC);
}else if($indiceMC>=35 && $indiceMC<=39.9){

    echo("usted posee Obesidad 2");
    echo("<br>");
    echo($indiceMC);

}else if($indiceMC>=40){
    echo("usted posee Obesidad 3");
    echo("<br>");
    echo($indiceMC);

}else{
    echo("Ingrese nuevamente sus datos");
    echo("<br>");
}
*/
//Ejercicio 3
/*Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta dependerá del
número de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de la compra; si el número de zapatos es
mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20% de descuento; y si son más 5 pares de zapatos se otorgará un 40% de
descuento. Defina la cantidad de variables que necesite, el precio de cada pare de zapatos =$150.000 y establezca el valor total de una
compra de 5 pares de zapatos.*/
/*
$valordescuento=0;
$cantidadZapatos = 5;
$costoneto = 150000;
$totalCompra = ($cantidadZapatos * $costoneto);

if ( $cantidadZapatos == 3 ) {
  $valordescuento = $totalCompra * 0.10 ;
    
} else if ( $cantidadZapatos > 3 && $cantidadZapatos <= 5 ) {
  $valordescuento = $totalCompra * 0.20 ;
    
} else  if ( $cantidadZapatos > 5 ) {
  $valordescuento = $totalCompra * 0.40 ;
}
$valorPagar = ($cantidadZapatos * $costoneto)-$valordescuento;
echo("<br>");
echo("EJERCICIO DE LOS ZAPATOS");
echo("<br>");
echo("Cantidad Vendida:" . $cantidadZapatos);
echo("<br>");
echo(" Costo Neto:" . $totalCompra);
echo("<br>");
echo("Valor del Descuento:" . $valordescuento);
echo("<br>");
echo(" Valor a Pagar es:". $valorPagar);
echo("<br>");
*/
//Ejercicio 4
/*4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si trabaja 40 horas o
menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora. Ejecute su
código para calcular el salario con 36 horastrabajadas.*/
/*

echo("EMPLEADOS POSTOBON");
echo("<br>");
echo("Consulta de salarios semanales de los empleados");
echo("<br>");
echo("JUAN JOSE RAMIREZ HUERTA");
echo("<br>");
echo("Que laboro 36 horas");
echo("<br>");
echo("<br>");


$valorxhora=20000;
$valorextras=25000;
$horas=36;
$horasminimas=40;
$valorhorasextras=0;

if($horas<=40){
    $sueldos=$horas*$valorxhora;
}elseif($horas>40){
    $horasextras=$horas - $horasminimas;
    $valorhorasextras=$horasextras*$valorextras;
    $sueldos=($horasminimas*$valorxhora)+$valorhorasextras;
}
echo($sueldos);

*/
//Ejercicio 5
/*5. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha consulta en un
arreglo denominado salpicón, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”*/
/*
$salpicon=array("dulce1"=>"Banano.","dulce2"=>"Manzana.","dulce3"=>"Durazno.","acido1"=>"Piña.","acido2"=>"Naranja.","acido3"=>"Lulo.");
echo("<br>");
echo("<br>");
foreach($salpicon as $clave=>$valor){
    echo($clave);
    echo("=>");
    echo($valor);
    echo("<br>");
}
*/

?>