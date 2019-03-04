<?php
abstract class AbstractClass
{
    // абстрактный метод требует только переопределить необходимые аргументы
    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass
{
    /* 
        дочерний класс может определить необязательные аргументы, 
        не указанные в объявлении родительского метода 
    */

    public function prefixName($name, $separator = ".")
    {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }

        return "$prefix $name $separator";
    } 
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman", "<br>");
echo $class->prefixName("Pacwoman", "<br>");
