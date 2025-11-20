<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <a href="/">Return</a>
    <h1>Students List</h1>
    <a href="/students/create">+ Add New Student</a>
    <ul>
        <?php foreach ($students as $student): ?>
            <li>
                <?= esc($student['first_name']) ?> (<?= esc($student['last_name']) ?>)
                <a href="/students/edit/<?= $student['id_student'] ?>">Edit</a> |
                <a href="/students/delete/<?= $student['id_student'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>