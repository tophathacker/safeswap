<?php

//this will end up being a user dashboard for profile settings and such
class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    public function index(){
		$this->view->render('dashboard/index',null,null);
    }

}