<?php
class Person {
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();
$jane = new Person;
$jane->haveBirthday();
var_dump($jane::$age);