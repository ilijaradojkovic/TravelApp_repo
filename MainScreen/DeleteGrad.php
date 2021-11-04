<?php
require '../Data/ProductControler.php';
$id=$_POST['id'];
$res=ProductControl::getInstance()->deleteGrad($id);
echo($res);