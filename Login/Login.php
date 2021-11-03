<?php
require '../Data/UserControler.php';
$username=$_POST['username'];
$password=$_POST['password'];
$res=UserControler::getInstance()->tryToLogin($username,$password);

echo $res;

?>