<?php
session_start();
if(!$_SESSION['usuario'])
{
    header('Location: http://localhost/Web1%20atv%20all/Visual/Login.php');
    exit();
}