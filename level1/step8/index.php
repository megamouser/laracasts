<?php
$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Jeffrey';
unset($person['age']);
die(var_dump($person));

require 'index.view.php';


