<?php

/**
 * main database object used in all model objects
 */
class Database extends PDO {

  /**
   * the Database constructor calls the PDO constructor and makes a new database
   * object to use in models
   */
  public function __construct() {
    parent::__construct('mysql:host=localhost;dbname=safeswap', 'safeswap', 'safeswap', null);
  }

}
