<?php

function Conectar_SQL() {

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "workshop-3";

    $conexion = new mysqli($server, $user, $pass, $db);

    if($conexion->connect_errno) {
        die("No me funco la conexion...");
    };

    return $conexion;

}

?>