<?php

/** similar to workdpress or cmsms, this file doesn't do anything but load the first few files required to get the page going */

//enable debugging for now
error_reporting(E_ALL); 
ini_set( 'display_errors','1');
//setup the root path for everything that might need it in the future
define ('ROOTPATH', dirname(__FILE__) . '/');

//jump into the main setup file
require(ROOTPATH . 'include/setup.php');
