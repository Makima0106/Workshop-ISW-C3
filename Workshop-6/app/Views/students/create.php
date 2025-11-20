<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
<h1>Add New Student</h1>
<form action="/students/store" method="post">
    <label>First Name:</label>
    <input type="text" name="first_name" required><br><br>
    
    <label>Last Name:</label>
    <input type="text" name="last_name" required><br><br>

    <label>Carrer:</label>
    <select name="id_carrer">
        <?php foreach ($carrers as $carrer): ?>
            
            <option value="<?= $carrer['id_carrer'] ?>"><?= $carrer['code'] ?></option>

        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>