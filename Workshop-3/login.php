<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="">

        <?php 
        if (isset($_GET['nombre'])): 
        ?>

        <h1>Bienvenido <?php echo htmlspecialchars($_GET['nombre']); ?></h1>
        <?php endif; ?>

        <h1>Login de Usuarios:</h1>

        <label for="nombre">Nombre de Usuario:</label>

        <br>

        <input type="text" id="nombre" name="nombre" required>

        <br>
        <label for="nombre">Contraseña de Usuario:</label>

        <br>

        <input type="text" id="nombre" name="nombre" required>

        <br>

        <button type="submit">Ingresar</button>

    </form>
    
</body>
</html>