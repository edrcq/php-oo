<?php 

require_once "FormClass.php";
require_once "InputClassCorr.php";

$form = new Form("action.php", "post", "Login NOW");
$usernameInput = new InputText("username", "Username");
$selectInput = new InputSelect("select_it", "Select please", ['France', 'Suisse', 'Belgique']);

$form->addInput($usernameInput);
$form->addInput($selectInput);

$form->print();

