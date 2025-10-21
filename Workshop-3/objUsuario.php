<?php

include_once 'conexion.php';

class ObjUsuario
{
    public $nombre;
    public $apellido;
    public $provincia;

    public function Agregar_Usuario() {

        $conexion = Conectar_SQL();

        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $provincia = $this->provincia;

        $consulta = "INSERT INTO usuarios (nombre, apellido, provincia) VALUES ('$nombre', '$apellido', '$provincia')";

        if ($conexion->query($consulta)) {
            echo "<script>alert('Se agrego el usuario corretamente');</script>";
        } else {
            echo "<script>alert('No se pudo agregarb el usuario');</script>";
        }

        $conexion->close();

    }

}

?>