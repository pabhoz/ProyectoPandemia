<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index_controller
 *
 * @author pabhoz
 */

class Patients_controller extends \Fox\FoxController{

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view->patients = Patients_bl::getAll();
        $this->view->title="Fox Admin Panel | Users";
        $this->view->render($this,"index");
    }
    
    public function create()
    {
        $this->view->levels = Patients_bl::getLevels();
        $this->view->title="Fox Admin Panel | Users";
        $this->view->render($this,"create");
    }
    
    public function createAction()
    {   
        $data = $_POST;
        $r = Patients_bl::create($data);
        \Fox\Core\Penelope::printJSON($r);
    }

}
