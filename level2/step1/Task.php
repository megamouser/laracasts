<?php
class Task 
{
    public $description = 'Go to the store';
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function completed()
    {
        $this->completed = true;
    }
}

$task = new Task('Lear OOP', 'The teacher bla bla bla...');
$task->completed();

var_dump($task->description);


