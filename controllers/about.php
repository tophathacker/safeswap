<?php

class About extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    //default when you call http://site/about
    public function index(){
        $this->view->render('about/index',null,null);
    }

}