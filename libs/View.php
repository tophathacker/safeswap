<?php

class View {
    public $name;
    
	function __construct() {
      
	}

	public function render($name,$arg,$noHeader)
	{
      //should probably change this in the future, especially if i use mustache
      // for now it just requires the view with the passed in $name
      // args aren't passed, but they are accessable from any required php
      $this->name = $name;
      if(isset($noHeader) && $noHeader == 1){
        require 'views/' . $name . '.php';
      } else{
        require 'views/header.php';
        require 'views/buildmenu.php';
		require 'views/' . $name . '.php';
        require 'views/footer.php';
      }
        
	}

}