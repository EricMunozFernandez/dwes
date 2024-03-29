<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 8</h3>
<h4>Enunciado:</h4>
<p>
    08. Crea un array asociativo que incluya 5 palabras castellano y sus respectivas traducciones al inglés. Muestra por pantalla las palabras y sus traducciones en frases como esta: La traducción de CASA en inglés es HOUSE.

</p>

<h4>Solución:</h4>
<?php

$diccionario = [
    "casa" => "house",
    "gato" => "cat",
    "perro" => "dog",
    "colegio" => "school",
    "pais" => "country"
];

?>

<ul>
    <li>La traducción de "casa" es <?= $diccionario["casa"] ?></li>
    <li>La traducción de "perro" es <?= $diccionario["perro"] ?></li>
</ul>

</body>
</html>