<?php
function connectToDb() 
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'admin', 'd365ef90c1211fdd6fbfb6eb79eb37b0');
    } catch (PDOException $e) {
        die($e->getMessage());
    }    
}

function fetchAllTasks($pdo) 
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();  
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data) 
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}



