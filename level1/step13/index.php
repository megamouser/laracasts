<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'admin', 'd365ef90c1211fdd6fbfb6eb79eb37b0');
} catch (PDOException $e) {
    die('Could not connect');
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();  

var_dump($statement->fetchAll());





