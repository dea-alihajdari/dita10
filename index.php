<?php
    include_once "config.php";

    $sql = "SELECT * FROM users";

    $getUsers = $conn->prepare($sql);

    $getUsers->execute();

    $users = $getUsers->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        table, td, th{
            border: 1px, solid, black;
            border-collapse: collapse;
        }
    </style>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user){?>
                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['name']?></td>
                    <td><?php echo $user['surname']?></td>
                    <td><?php echo $user['email']?></td>

                </tr>
                <?php }?>
        </tbody>
    </table>
</body>
</html>