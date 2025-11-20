<!DOCTYPE html>
<html>
<head>
    <title>Carrers</title>
</head>
<body>
    <a href="/">Return</a>
    <h1>Carrer List</h1>
    <a href="/carrers/create">+ Add New Carrer</a>
    <ul>
        <?php foreach ($carrers as $carrer): ?>
            <li>
                <?= esc($carrer['code']) ?> (<?= esc($carrer['name']) ?>)
                <a href="/carrers/edit/<?= $carrer['id_carrer'] ?>">Edit</a> |
                <a href="/carrers/delete/<?= $carrer['id_carrer'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>