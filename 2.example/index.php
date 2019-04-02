<?php
session_start();
if(empty($_SESSION['user'])) 
{
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?= 'You are logged in like: ' . $_SESSION['user']['login']; ?>
    </div>
    <div>
        <?= 'Your permissions level: ' . $_SESSION['user']['permissions'] ?>
    </div>  
    <div>
        <ul>
            <li><a href="userlist.php">userlist</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>
</body>
</html>