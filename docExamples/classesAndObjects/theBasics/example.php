<?php
class A 
{
    function foo()
    {
        if(isset($this))
        {
            var_dump('$this is defined (' . get_class($this) . ')'); 
        } else {
            var_dump('$this is not defined');
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A;
$a->foo();

A::foo();

$b = new B;
$b->bar();

B::bar();