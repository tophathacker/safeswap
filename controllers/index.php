<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    public function index(){
      $this->view->render('index/index',null);
    }
    
    public function echothis($arg){
      $this->view->render('index/echothis',$arg);
    }
    
    public function getPost(){
      $this->model->getPost();
    }
}