<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    public function index(){
      $this->view->render('index/index',null,null);
    }
    
    public function getPost(){
      //get json post list
      echo $this->model->getPost();
    }
    
    public function signup(){
      // set third param to 1 so header/footer isn't displayed again
      $this->view->render('index/signup',null,1);
    }
}