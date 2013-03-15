<?php

class Forms extends Controller {

  function __construct() {
    parent::__construct();
  }

  public function signup() {
    $this->view->render('forms/signup', null, 1);
  }
  public function login() {
    $this->view->render('forms/login', null, 1);
  }
  
  public function login_action($args,$post) {
    echo $this->model->login($post);
  }

  public function checkusername($username) {
    echo $this->model->checkusername($username);
  }

}