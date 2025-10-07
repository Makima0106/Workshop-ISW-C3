<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="funciones.php" method="post">

        <h1>Formulario de Usuarios:</h1>

        <label for="nombre">Nombre:</label>

        <br>

        <input type="text" id="nombre" name="nombre" required>

        <br>

        <label for="apellido">Apellido:</label>

        <br>

        <input type="text" id="apellido" name="apellido" required>

        <br>

        <label for="provincia">Provincia:</label>

        <br>

        <select name="provincia" id="provincia" required>
            <option value="">...</option>
            <?php include 'funciones.php'; Agregar_Provincias(); ?>
        </select>

        <br>

        <button type="submit">Agregar</button>

    </form>
    
</body>
</html>