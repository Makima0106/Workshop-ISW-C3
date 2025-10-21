<?php

include_once 'conexion.php';

include_once 'objUsuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = urlencode($_POST['nombre']);

    $usuario = Crear_Usuario();

    header('Location: login.php?nombre=' . $usuario->nombre);
}

function Crear_Usuario() {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $provincia = $_POST['provincia'];

    $usuario = new ObjUsuario();
    $usuario->nombre = $nombre;
    $usuario->apellido = $apellido;
    $usuario->provincia = $provincia;

    $usuario->Agregar_Usuario();

    return $usuario;

}

function Agregar_Provincias() {

    $conexion = Conectar_SQL();

    $consulta = "SELECT * FROM provincias";

    $provincias = $conexion->query($consulta);

    if ($provincias->num_rows > 0) {

        while ($provincia = $provincias->fetch_assoc()) {
            echo "<option value='{$provincia['nombre']}'>{$provincia['nombre']}</option>";
        }

    } else {
        echo "<script>alert('No se pudo cargar las provincias');</script>";
    }

}


?>