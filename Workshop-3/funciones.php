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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = urlencode($_POST['nombre']);

    Agregar_Usuario();

    header('Location: login.php?nombre=' . $nombre);
}

function Agregar_Usuario() {

    $conexion = Conectar_SQL();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $provincia = $_POST['provincia'];

    $consulta = "INSERT INTO usuarios (nombre, apellido, provincia) VALUES ('$nombre', '$apellido', '$provincia')";

    if ($conexion->query($consulta)) {
        echo "<script>alert('Se agrego el usuario corretamente');</script>";
    } else {
        echo "<script>alert('No se pudo agregarb el usuario');</script>";
    }

    $conexion->close();

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