<?php

class Setup {

  function setupURL($url) {
    $trimmedUrl = rtrim($url, '/');
    return(explode('/', $trimmedUrl));
  }

  function __construct() {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //default to error so set everything to that first
    $file = 'controllers/error.php';
    $regClass = 'error';
    $regFunction = null;
    $regValues = null;

    if (!isset($_GET['url'])) {
      //this defaults to index when there is nothing in the URL string
      $file = 'controllers/index.php';
      $regClass = 'index';
    } else {
      //there is another page requested, so split up the url
      $url = $this->setupURL($_GET['url']);
      //if the file exists, switch to the correct controller
      if (file_exists('controllers/' . $url[0] . '.php')) {
        $file = 'controllers/' . $url[0] . '.php';
        $regClass = $url[0];
        $regFunction = isset($url[1]) ? $url[1] : null;
        if (count($url) > 2) {
          $regValues = '';
          for ($i = 2; $i < count($url); $i++) {
            $regValues = $regValues . $url[$i];
          }
        }
      }
    }

    require $file;
    $controller = new $regClass;
    if (isset($regFunction)) {
      $controller->{$regFunction}($regValues);
    }else {
      $controller->index();
    }
    
  }

}