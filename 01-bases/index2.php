<?php 

require_once "MaPremiereClass.php";

$obj = new MaPremiereClass();

$obj->AfficheValeur1();

$obj->setValeur1(7);

$obj->AfficheValeur1();

$obj->valeur1 = 9;

$obj->AfficheValeur1();

echo MaPremiereClass::CONSTANTE_UNE;