<?php
if(empty($_COOKIE['myCookie'])) {
    setcookie('myCookie', 'myValue');
} else {
    echo $_COOKIE['myCookie'];
}