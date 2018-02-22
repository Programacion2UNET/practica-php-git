<?php

$codigo       = filter_input(
    INPUT_POST,
    'codigo',
    FILTER_SANITIZE_STRING
);
$titulo       = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$autor        = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$fpublicacion = filter_input(INPUT_POST, 'fpublicacion', FILTER_SANITIZE_STRING);
$editorial    = filter_input(INPUT_POST, 'editorial', FILTER_SANITIZE_STRING);

// Iniciar conexion con la BD
$connection = mysqli_connect('localhost', 'root', 'Mauc');

if (!$connection) {
    die('No hay conexión a la BD');
}

// Selecciona la BD
mysqli_select_db($connection, 'biblioteca');

// Preparar la sentecia SQL
$sql = sprintf("INSERT INTO libros (codigo, titulo, autor, fpublicacion, editorial)
       VALUES ('%s', '%s', '%s', '%s', '%s')",
    $codigo, $titulo, $autor, $fpublicacion, $editorial);

$res = mysqli_query($connection, $sql);
var_dump($res);
mysqli_free_result($res);
