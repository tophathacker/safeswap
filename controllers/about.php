<?php

/**
 * this controller handles the about pages
 */
class About extends Controller {

  /**
   * constructor for About class, calls Controller constructor 
   */
  function __construct() {
    parent::__construct();
  }

  /**
   * Default when you call /about/ or /about/index
   */
  public function index() {
    $this->view->render('about/index', null, null);
  }

}