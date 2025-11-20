<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
<h1>Edit Student</h1>
<form action="/students/update/<?= $student['id_student'] ?>" method="post">
    
    <label>First Name:</label>
    <input type="text" name="first_name" value="<?= $student['first_name'] ?>" required><br><br>
    
    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?= $student['last_name'] ?>" required><br><br>

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