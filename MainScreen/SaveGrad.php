<?php
require '../Data/ProductControler.php';
$GradName=$_POST['Ime'];
$GradCena=$_POST['Cena'];
$GradDrzavaID=$_POST['Drzave'];
$result=ProductControl::getInstance()->insertGrad($GradName,$GradCena,$GradDrzavaID);
echo($result);