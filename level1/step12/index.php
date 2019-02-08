<?php
require 'functions.php';
class Task {
    public $description;
    protected $completed = false;

    public function __construct($description) 
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete() 
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

//dd($tasks);

require 'index.view.php';
