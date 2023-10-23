<!DOCTYPE html>
<html>

<body>

    <h1>Basic CRUD example</h1>

    <form action="?action=create" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="submit" value="Add Person">
    </form>

    <table>
        <thead>
        </thead>
        <tbody>
            <?php foreach ($persons as $row) : ?>
                <tr>
                    <td>
                        <form action="?action=update" method="post">
                            <label for="id">ID:</label>
                            <input type="text" name="id" id="id" value="<?= $row['id'] ?>">

                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" value="<?= $row['name'] ?>">

                            <label for="surname">Apellido:</label>
                            <input type="text" name="surname" id="surname" value="<?= $row['surname'] ?>">

                            <input type="submit" value="Update">

                            <a href="?action=delete&id=<?= $row['id'] ?>">Delete</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>