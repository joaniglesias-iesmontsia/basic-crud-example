<!DOCTYPE html>
<html>
<body>

<h1>Basic CRUD example</h1>

<form action="?action=create" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="surname" placeholder="Surname" required>
    <input type="submit" value="Add Person">
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($persons as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['surname'] ?></td>
                <td>
                    <!-- <a href="?action=edit&id=<?= $row['id'] ?>">Edit</a> -->
                    <a href="?action=delete&id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
