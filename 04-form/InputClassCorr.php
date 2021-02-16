<?php 

class Input {
    public $type;
    public $name;
    public $id;
    public $label;

    function __construct() {
        $this->id = Input::genId();
    }

    public function getHtml() {
        throw new Exception("Non implémenté");
    }

    public static function genId() {
        return 'input_' . bin2hex(random_bytes(4)); 
    }
}

class InputText extends Input {
    public $type = "text";

    function __construct($name, $label = "No label") {
        $this->name = $name;
        $this->label = $label;
    }

    public function getHtml() {
        return <<<HTML
        <div class="input">
        <label for="$this->id">$this->label</label>
        <input type="$this->type" name="$this->name" id="$this->id" />
        </div>
        HTML;
    }
}

class InputSelect extends Input {
    public $type = "select";
    private $values;

    function __construct($name, $label = "No label", $values = []) {
        $this->name = $name;
        $this->label = $label;
        $this->values = $values;
    }

    public function getHtml() {
        $html = <<<HTML
        <div class="input">
        <label for="$this->id">$this->label</label>
        <select name="$this->name" id="$this->id">
        HTML;

        foreach($this->values as $value) {
            $html .= <<<HTML
            <option value="$value">$value</option>
            HTML;
        }

        $html .= "</select></div>";
        return $html;
    }
}

