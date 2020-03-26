<?php
/**
 * Description of Index_controller
 *
 * @author pabhoz
 */

class Shoes_controller extends \Fox\FoxController{
   
    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        echo "Shoes Index Method";
    }
    
    public function view($id)
    {
        $this->view->render($this,"view","Mostrando zapato $id");
    }
    
}
