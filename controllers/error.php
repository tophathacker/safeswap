<?php

class Error extends Controller {

	function __construct() {
		parent::__construct();
	}
    //defualt error is in index
    public function index(){
		$this->view->render('error/index',null,null);
    }

}