<?php

/**
 * general error catching, including 404. For now, not catching anything other
 * than missing files/links/directories
 */
class Error extends Controller {

  /**
   * constructor for Error class, calls Controller constructor 
   */
  function __construct() {
    parent::__construct();
  }

  /**
   * default when you call /error/ or /error/index
   */
  public function index() {
    $this->view->render('error/index', null, null);
  }

}