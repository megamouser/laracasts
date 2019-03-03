<?php
require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';

$jeffrey = new Person('Jeffrey Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);
$laracasts->hire(new Person('Jane Doe'));
var_dump($laracasts->getStaffMembers());


