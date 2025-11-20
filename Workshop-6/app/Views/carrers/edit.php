<!DOCTYPE html>
<html>
<head>
    <title>Carrers</title>
</head>
<body>
<h1>Edit Carrer</h1>
<form action="/carrers/update/<?= $carrer['id_carrer'] ?>" method="post">

    <label>Code:</label>
    <input type="text" name="code" value="<?= $carrer['code']; ?>" required><br><br>
    
    <label>Name Carrer:</label>
    <input type="text" name="name" value="<?= $carrer['name']; ?>" required><br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>