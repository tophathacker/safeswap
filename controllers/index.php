<?php

/**
 * index controller
 */
class Index extends Controller {

  function __construct() {
    parent::__construct();
  }

  /**
   * default when you go to / or /index/ or /index/index
   */
  public function index() {
    $this->view->render('index/index', null, null);
  }

  /**
   * this isn't used, not even sure if it works.
   */
  public function getPost() {
    //get json post list
    echo $this->model->getPost();
  }

  /**
   * call the render method of the index view to display a signup form (duplicate
   * of forms/signup?)
   */
  public function signup() {
    // set third param to 1 so header/footer isn't displayed again
    $this->view->render('index/signup', null, 1);
  }

}