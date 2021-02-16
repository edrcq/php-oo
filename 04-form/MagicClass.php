<?php 

class Magic {

    private $_data = [];

    function __construct() {

    }

    function __get($name) {
        if (array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }
    }

    function __set($name, $value) {
        $this->_data[$name] = $value;
    }

    function __isset($name) {
        return isset($this->_data[$name]);
    }

}