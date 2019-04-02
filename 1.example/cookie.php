<?php
if(empty($_COOKIE['myCookie'])) {
    setcookie('myCookie', 'myValue', time() + 3600);
} else {
    echo $_COOKIE['myCookie'];
}