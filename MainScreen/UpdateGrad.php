<?php
require '../Data/ProductControler.php';
$id=$_POST['id'];
$Ime=$_POST['Ime'];
$Cena=$_POST['Cena'];
$DrzavaID=$_POST['Drzave'];
$res=ProductControl::getInstance()->updateGrad($id,$Ime,$Cena,$DrzavaID);
echo $res;
