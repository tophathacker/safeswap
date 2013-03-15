<?php

/**
 * default controller all others extend
 */
class Controller {

  /**
   * create a new view and add it to the controller
   */
  function __construct() {
    $this->view = new View();
  }

  /**
   * loads the model automatically if it exists (not all views need a model)
   * normally called from setup.php
   * 
   * @param string $name model/controller name to load automatically (if exists)
   */
  public function LoadModel($name) {
    $path = 'models/' . $name . '_model.php';
    if (file_exists($path)) {
      require $path;
      $modelName = $name . '_Model';
      $this->model = new $modelName();
    }
  }

}