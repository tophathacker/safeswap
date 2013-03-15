<?php

class Controller {

	function __construct() {
		$this->view = new View();
	}

    //load all models with the same name as the current controller
    // called from the setup.php
    public function LoadModel($name){
      $path = 'models/' . $name . '_model.php';
      if(file_exists($path)){
        require $path;
        $modelName = $name . '_Model';
        $this->model = new $modelName();
      }
    }
}