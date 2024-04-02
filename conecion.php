<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";

$base = "situ_database";
$conectarBD = new mysqli($servidor, $usuario, $clave, $base) or die("error al conectar"
    . "la base de datos" . mysql_error());
mysqli_set_charset($conectarBD, "utf8");