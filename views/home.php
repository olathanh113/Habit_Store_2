<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Trang chủ</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            <th>Password</th>
        </tr>

        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['id_user']?></td>
            <td><?= $user['Hoten']?></td>
            <td><?= $user['Email']?></td>
            
            <td>
                <a href="<?= BASE_URL . '?act=user-detail&id=' . $user['id_user'] ?>">Xem chi tiet</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>