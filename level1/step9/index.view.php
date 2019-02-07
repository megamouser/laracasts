<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <li>
        <strong>title: </strong>
        <span><?= $task['title']; ?></span>
    </li>
    <li>
        <strong>due date: </strong>
        <span><?= $task['due']; ?></span>
    </li>    
    <li>
        <strong>personal responsibility: </strong>
        <span><?= $task['assigned_to']; ?></span>
    </li>    
    <li>
        <strong>status:</strong>
        <?php if($task['completed']): ?>
            <?= 'Finished &#9989;'; ?>
        <?php else: ?>
            <?= 'Incomplete &#9989;'; ?>
        <?php endif ?>
    </li>    
</body>
</html>