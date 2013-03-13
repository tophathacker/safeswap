<?php
/* here in the setup file, check for config and if it's there run with it. Otherwise, create a new config based on default-config.php */

require(ROOTPATH . 'include/dbutil.php');
require(ROOTPATH . 'include/utils.php');

if(!file_exists(ROOTPATH . 'config/config.php'))
  copy(ROOTPATH . 'config/default-config.php', ROOTPATH . 'config/config.php');
require(ROOTPATH . 'config/config.php');

//i'll eventually get this from config.php file
$database = new db_object('localhost','safeswap','safeswap','ss_','safeswap');



//echo 'root path = ' . ROOTPATH . '<br />';
//echo 'request uri = ' . $_SERVER['REQUEST_URI'];
//if ( file_exists(

?>
