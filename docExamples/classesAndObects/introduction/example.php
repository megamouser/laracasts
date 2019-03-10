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

class OtherClass
{
    public $var = 'aMemberVar';
    public function func()
    {
        return 'aMemberVar';
    }
}

$element = 'aMemberVar';

function getVarName()
{
    return 'aMemberVar';
}

$foo = new Foo;
$otherObj = new OtherClass;

define(MYCONSTANT, 'aMemberVar');

var_dump($foo->$element . ' from self property');
var_dump($foo->{ getVarName() } . ' from outer function');
var_dump($foo->{ MYCONSTANT } . ' from outer constant');
var_dump($foo->{ 'aMemberVar' } . 'from outer literal property');

var_dump($foo->{ $otherObj->var } . ' from other object property');
var_dump($foo->{ $otherObj->func() } . ' from other object method');

var_dump($foo->{ 'aMemberFunc' }() . 'from outer literal like function');
var_dump($foo->{ $foo->aFuncName }() . 'from inner property, inner method');