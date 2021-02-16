<?php 

class Input {
    public $type;
    public $name;

    public function getHtml() {
        throw new Exception("Non implémenté");
    }
}

class InputText extends Input {
    public $type = "text";

    function __construct($name) {
        $this->name = $name;
    }

    public function getHtml() {
        return "gg";
    }
}


$inp = new InputText("username");
$inp->getHtml();

var_dump($inp);
