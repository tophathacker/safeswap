<?php

class View {

	function __construct() {
      
	}

	public function render($name,$arg,$noHeader)
	{
      if(isset($noHeader) && $noHeader == 1){
        require 'views/' . $name . '.php';
      } else{
        require 'views/header.php';
		require 'views/' . $name . '.php';
        require 'views/footer.php';
      }
        
	}

}