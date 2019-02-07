<?php
$animals = ['dog', 'cat'];

function dd($animals)  {
    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';
}

dd($animals);

require 'index.view.php';



