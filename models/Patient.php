<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Pabhoz
 */
class Patient extends \Fox\FoxModel {

    private $id;
    private $name;
    private $level;

    function __construct($id, $name, $level) {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLevel() {
        return $this->level;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    function setLevel($level): void {
        $this->level = $level;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

}
