<!DOCTYPE html>
<html>
<head>
    <title>Carrers</title>
</head>
<body>
<h1>Add New Carrer</h1>
<form action="/carrers/store" method="post">
    <label>Code:</label>
    <input type="text" name="code" required><br><br>
    
    <label>Name Carrer:</label>
    <input type="text" name="name" required><br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>