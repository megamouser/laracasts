<?php
session_start();
$users = require_once 'users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            background: #eee;
        }
        table th {
            font-weight: bolder;
        }
        table, table th, table td {
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    if($_SESSION['user']['permissions'] != 'administrator')
    {
        die('you dont have permisssions to look this page');
    }
    ?>
    <table>
        <tr>
            <th>login</th>
            <th>permission</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?= $user['login'] ?>
                </td>
                <td>
                    <?= $user['permissions'] ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <div>
        <ul>
            <li>
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="logout.php">logout</a>
            </li>
        </ul>
    </div>
</body>
</html>