<?php

/**
 * this will end up being a user dashboard for profile settings and such
 */
class Dashboard extends Controller {

  /**
   * constructor for Dashboard class, calls Controller constructor 
   */
  function __construct() {
    parent::__construct();
  }

  /**
   * default when you call /dashboard/ or /dashboard/index
   */
  public function index() {
    $this->view->render('dashboard/index', null, null);
  }

}