<?php
interface Logger
{
    public function log($data);
}

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('log the data to database');
    }
}

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to a XWebService');
    }
}

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new logToFile;
        $logger->log($data);
    }
}

$app = new App;
$app->log('Some information here');
$app->log('Some information here', new LogToXWebService);
$app->log('Some information here', new LogToDatabase);
