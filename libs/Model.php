<?php

/**
 * main model that gets extended
 */
class Model {

  /**
   * constructor for model that creates a new db, accessable from any model
   * that extends this model
   */
  function __construct() {
    $this->db = new Database();
  }

}