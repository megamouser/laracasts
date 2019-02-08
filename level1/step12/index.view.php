<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Laracasts</h1>
        <ul>
            <?php foreach ($tasks as $task) :?>
                <li><?= $task->description; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
