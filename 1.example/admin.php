<?php
session_start();
if(!empty($_SESSION['is_admin'])) 
{
    echo 'you are admin';
} else {
    echo 'you are guest';
}
echo session_save_path();