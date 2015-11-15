<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author Pc
 */
class Template {

    protected $template;
    protected $vars = array();

    public function __construct($template) {
        $this->template = $template;
    }

    public function __get($key) {
        return $this->vars = $key;
    }

    public function __set($key, $value) {
        $this->vars[$key] = $value;
    }

    public function __toString() {
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
        ;
    }

}
