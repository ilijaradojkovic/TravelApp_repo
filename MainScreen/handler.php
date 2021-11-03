<?php
require '../Data/ProductControler.php';
require 'Grad.php';
$result=ProductControl::getInstance()->getAllGradovi();
//-> Ime ->Cena mora da bude isti naziv kao u klasi a u klasi mora da bude isti naziv kolone kao u DB pazi velikai  mala slova
echo $result;