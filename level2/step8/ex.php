<?php
interface Logger 
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a file: ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to the database');
    }
}

//...

class UsersController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public function show()
    {
        $user = 'John Doe';
        $this->logger->execute($user);
    }
}

$usersToFile = new UsersController(new LogToFile);
$usersToFile->show();

$usersToDatabase = new UsersController(new LogToDatabase);
$usersToDatabase->show();




