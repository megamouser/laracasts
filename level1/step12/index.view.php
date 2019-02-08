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
                <li>

                    <?php if ($task->completed): ?>
                        <strike>
                    <?php endif; ?>

                    <?= $task->description; ?>

                    <?php if ($task->completed): ?>
                        </strike>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
