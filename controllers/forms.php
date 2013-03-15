<?php

/**
 * form controller for all major forms, for now it's only loading forms and json
 * out to login and signup forms
 */
class Forms extends Controller {

  /**
   * constructor for Forms callse Controller constructor
   */
  function __construct() {
    parent::__construct();
  }

  /**
   * just a placeholder for now, returns the form
   */
  public function signup() {
    //set the third param to 1 so it doesn't include header/footer
    $this->view->render('forms/signup', null, 1);
  }

  /**
   * just a placeholder for now, returns the form
   */
  public function login() {
    //set the third param to 1 so it doesn't include header/footer
    $this->view->render('forms/login', null, 1);
  }

  /**
   * takes in a JSON as $post, checks if user can log in or is logged in, and
   * returns a JSON object to the requestor
   */
  public function login_action($args, $post) {
    //no need to render, just getting a json element
    echo $this->model->login($post);
  }

  /**
   * takes in a username string and returns a JSON of the username (and soon 
   * session variable stuff)
   * 
   * @param string $username username to check against db
   */
  public function checkusername($username) {
    //no need to render, just getting a json element
    echo $this->model->checkusername($username);
  }

}