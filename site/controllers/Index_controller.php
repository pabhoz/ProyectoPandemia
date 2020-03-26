<?php
/**
 * Description of Index_controller
 *
 * @author pabhoz
 */

class Index_controller extends \Fox\FoxController{
   
    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        //$this->view->debug = true;
        $this->view->render($this,"index","View Title");
    }
    
    public function notFound($title){
        $this->view->render($this,"404",$title);
    }
    
    public function createPatient(){
        unset($_GET["url"]);
        $data = $_GET;
        $r = Patients_bl::create($data);
        print_r($r);
    }
    
    public function listar(){
        $this->view->patients = Patients_bl::getAll();
        $this->view->render($this,'list');
    }
}
