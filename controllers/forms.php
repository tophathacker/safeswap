<?php

class Forms extends Controller {

  function __construct() {
    parent::__construct();
  }

  public function signup() {
    //set the third param to 1 so it doesn't include header/footer
    $this->view->render('forms/signup', null, 1);
  }
  public function login() {
    //set the third param to 1 so it doesn't include header/footer
    $this->view->render('forms/login', null, 1);
  }
  
  public function login_action($args,$post) {
    //no need to render, just getting a json element
    echo $this->model->login($post);
  }

  public function checkusername($username) {
    //no need to render, just getting a json element
    echo $this->model->checkusername($username);
  }

}