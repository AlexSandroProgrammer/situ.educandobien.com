<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";

$base = "situ_database";
$conectarBD = new mysqli($servidor, $usuario, $clave, $base);

if ($conectarBD->connect_error) {
    die('Conexion fallida:' . $conectarBD->connect_error);
}


echo 'Conexion exitosa';