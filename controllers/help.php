<?php

/**
 * Help controller
 */
class Help extends Controller {

  function __construct() {
    parent::__construct();
  }

  /**
   * default when you go to /help/ or /help/index
   */
  public function index() {
    $this->view->render('help/index', null, null);
  }

}