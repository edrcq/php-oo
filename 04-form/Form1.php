<?php

class Form
{
    private $action;
    private $method;
    private $inputs;

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function setInputs($inputs)
    {
        $this->inputs = $inputs;
    }

    public function build()
    {
        $html = "<form action=\"$this->action\" method=\"$this->method\">";

        foreach ($this->inputs as $input) {
            $html = $html . "
                <label for=\"{$input['name']}\">{$input['label']}</label>
                <input name=\"{$input['name']}\" type=\"{$input['type']}\" id=\"{$input['name']}\">
            ";
        }

        $html = $html . "</form>";
        return $html;
    }
}
