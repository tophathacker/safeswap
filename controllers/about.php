<?php

class About extends Controller {

	function __construct() {
		parent::__construct();
        $this->view->render('about/index');
	}

}