<?php
require 'vendor/autoload.php';
$jeffrey = new Acme\Person('Jeffrey Way');
$staff = new Acme\Staff([$jeffrey]);
$laracasts = new Acme\Business($staff);
$laracasts->hire(new Acme\Person('Jane Doe'));
var_dump($laracasts->getStaffMembers());

