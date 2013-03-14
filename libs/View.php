<?php

class View {
    public $name;
    
	function __construct() {
      
	}

	public function render($name,$arg,$noHeader)
	{
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