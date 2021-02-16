<?php 

class Form {
    private $method;
    private $action;

    private $inputs;

    private $text_submit;



    function __construct($action, $method, $text_submit = "Submit") {
        $this->action = $action;
        $this->method = $method;
        $this->text_submit = $text_submit;
        $this->inputs = array();
    }

    function setIt($var, $value) {
        $this->$var = $value;
    }

    public function getInputs() {
        return $this->inputs;
    }

    public function addInput(Input $input) {
        // array_push($this->inputs, $elem)
        $this->inputs[] = $input;
    }

    public function setInputs($inputs) {
        $this->inputs = $inputs;
    }

    public function getHtml() {
        $html = <<<HTML
        <form action="$this->action" method="$this->method">
        HTML;

        foreach ($this->inputs as $input) {
            $html .= $input->getHtml();
        }
        
        $html .= <<<HTML
        <button type="submit">$this->text_submit</button>
        HTML;
        $html .= "</form>";

        return $html;
    }

    public function print() {
        echo $this->getHtml();
    }


}

?>