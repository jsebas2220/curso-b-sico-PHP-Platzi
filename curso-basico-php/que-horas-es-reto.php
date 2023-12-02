<?php
// FILEPATH: /D:/OneDrive - COGNOX S.A.S/Personal/Cursos/1-Programación/PHP/Platzi Curso Básico de PHP Instalación Fundamentos y Operadores/curso-basico-php-clase-15/que-horas-es-reto.php

// Prompt the user to enter the number of hours
echo "Enter the number of hours: ";
$hours = readline();

// Prompt the user to enter the number of minutes
echo "Enter the number of minutes: ";
$minutes = readline();

// Prompt the user to enter the number of seconds
echo "Enter the number of seconds: ";
$seconds = readline();

// Convert hours to seconds
$hoursInSeconds = $hours * 3600;

// Convert minutes to seconds
$minutesInSeconds = $minutes * 60;

// Display the entered values
echo "You entered: $hours hours, $minutes minutes, and $seconds seconds.";
echo "The total seconds for $hours hours is: $hoursInSeconds";
echo "The total seconds for $minutes minutes is: $minutesInSeconds";
?>



