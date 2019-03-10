<?php
class Foo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';

    public function aMemberFunc()
    {
        return 'Inside  `aMemberFunc()`';
    }
}

function getVarName()
{
    return 'aMemberVar';
}

$foo = new Foo;

$element = 'aMemberVar';

var_dump($foo->$element);
var_dump($foo->{getVarName()});