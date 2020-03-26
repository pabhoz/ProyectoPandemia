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
class Level extends \Fox\FoxModel {

    private $id;
    private $name;

    function __construct($id, $name) {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setName($name): void {
        $this->name = $name;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

}
