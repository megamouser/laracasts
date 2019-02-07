<?php
$animals = ['dog', 'cat'];

function dd($data)  {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

dd('hello world');

require 'index.view.php';



