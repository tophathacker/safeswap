<?php

class Forms extends Controller {

  function __construct() {
    parent::__construct();
  }

  public function signup() {
    $this->view->render('forms/signup', null, 1);
  }

  public function signup_action($username) {
    
  }

  public function checkusername($username) {
    $this->model->checkusername($username);
  }

}