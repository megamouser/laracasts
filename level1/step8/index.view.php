<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Task For The Day</h1>
    <?= ucwords('hello my name is jeffrey') ?>
    <ul>
    <?php foreach ($task as $heading => $value): ?>
        <li>
            <strong><?= ucwords($heading) ?></strong> <?= $value ?>
        </li>
    <?php endforeach ?>    
    </ul>
</body>
</html>