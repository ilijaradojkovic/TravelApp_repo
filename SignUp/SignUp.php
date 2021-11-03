<?php
require '../Data/UserControler.php';
$username=$_POST['username'];
$password=$_POST['password'];
$passwordRepeat=$_POST['passwordRepeat'];
$res=UserControler::getInstance()->tryToRegister($username,$password,$passwordRepeat);
echo($res);
?>