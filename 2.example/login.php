<?php
    session_start();
    $users = require_once 'users.php';
    

    if(!empty($_SESSION['user'])) {
        header('Location: index.php');
    }

    $errors = [];
    if (!empty($_POST['login']) && !empty($_POST['password']))
    {
        foreach($users as $user)
        {
            if($_POST['login'] == $user['login'] && $_POST['password'] == $user['password']) 
            {
                $_SESSION['user'] = $user;
                header('Location: index.php');
                die();
            }
        }

        $errors[] = 'Неверный логин или пароль';
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <h1>loging in:</h1>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>

    <form method="POST">
        <label for="login">login</label>
        <input id="login" name="login" type="text">
        <label for="password">password</label>
        <input id="password" name="password" type="password">
        <button type="submit">login</button>
    </form>

</body>
</html>