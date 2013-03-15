<?php

/**
 * view class that get's created by controller
 */
class View {

  /**
   *
   * @var string I don't remember what this is for. Maybe I'll get brave and take it out some day
   *  
   */
  public $name;

  function __construct() {
    
  }

  /**
   * 
   * I'll be changing this in the future when I work with handlebars.js or Mustache
   * 
   * @param string $name name of class/view/model
   * @param string $arg it isn't used, but accessble from the views (bad practice?)
   * @param integer $noHeader set to 1 if you don't want header/footer
   */
  public function render($name, $arg, $noHeader) {
    $this->name = $name;
    if (isset($noHeader) && $noHeader == 1) {
      require 'views/' . $name . '.php';
    } else {
      require 'views/header.php';
      require 'views/buildmenu.php';
      require 'views/' . $name . '.php';
      require 'views/footer.php';
    }
  }

}