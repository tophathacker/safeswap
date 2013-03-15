<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    public function index(){
		$this->view->render('dashboard/index',null,null);
    }

}