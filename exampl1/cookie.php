<?php
if(empty($_COOKE['myCookie']))
{
    setcookie('myCookie', 'myValue');
}
else
{
    var_dump($_COOKIE['myCookie']);
}
