<?php
class Connection 
{
    public static function make($config)
    {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'admin', 'd365ef90c1211fdd6fbfb6eb79eb37b0');

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch(PDOException $e) {
            die($e->getMessage()); 
        }
    }
}


