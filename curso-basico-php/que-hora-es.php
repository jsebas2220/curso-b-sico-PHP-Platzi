<?php

//Primero debemos solicitarle al usuario la cantidad de segundos a convertir. Para esto podemos utilizar la función readline() el cual nos ayuda a pedir datos:
$segundos = readline("Ingresa el tiempo en segundos: ");

//Ahora debemos convertir los segundos a horas, minutos y segundos. Para esto podemos utilizar la función (int) para convertir el resultado a un número entero:

// Ahora sí, para la conversión debemos primero obtener la cantidad de horas. Para ello, debemos dividir la cantidad de segundos ingresados por el usuario por la cantidad de segundos que tiene 1 hora:
$horas = (int) ($segundos / 3600);

// Ya que tenemos la cantidad de horas, obtengamos la cantidad de minutos. Previo a esto, tenemos que obtener el residuo de la división anterior, pues los segundos que sobró representarán la cantidad de minutos. Además, el valor de $segundos será reasignado al valor de este residuo:
$segundos = (int) ($segundos % 3600);

// Ahora convirtamos la cantidad de segundos sobrantes a minutos:
$minutos = (int) ($segundos / 60);

// Finalmente, obtengamos la cantidad de segundos sobrantes:Finalmente, el residuo de esta última división van a representar los segundos:

$segundos = $segundos % 60;
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos.";

echo "\n";

/* EJERCICIO

Ahora te toca hacer un programa que convierta horas, minutos y segundos a únicamente segundos

*/