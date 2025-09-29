<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "workshop-2";

    $conexion = new mysqli($server, $user, $pass, $db);

    $conexion->connect_errno;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $usuario = "INSERT INTO usuario (nombre, apellido, correo, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

    $conexion->query($usuario);

    $conexion->close();
    
?>