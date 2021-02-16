<?php 

require_once "FormClass.php";

$inputs_array = [
    [ 'label' => 'Username', 'name' => 'username', 'type' => 'text' ],
    [ 'label' => 'Password', 'name' => 'password', 'type' => 'password' ],
];

$form = new Form("action.php", "post", "Login NOW");
$form->addInput("username", "text", "Username");

var_dump($form->getInputs());

echo $form->getHtml();

