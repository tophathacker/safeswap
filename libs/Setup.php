<?php

/**
 * Setup class that starts the right controller
 *
 * @copyright  2013 Ryan Hatfield
 * @version    Alpha: 1
 * @link       http://github.com/tophathacker/safeswap
 */
class Setup {

  /**
   * setupURL takes in a URL and echo's back an array contaning class,function, and argument
   * 
   * @param string $url unaltered GET_ url
   * @return array returns an array where [0] is the class, [1] is the function and [2] is the argument
   */
  function setupURL($url) {
    //with this setup the URL would be
    // http://rooturl.com/controller/function/args
    // where controller is the name of the class, 
    // function is the name of a function in that class,
    // args (if any) get passed to that function
    $trimmedUrl = rtrim($url, '/');
    return(explode('/', $trimmedUrl));
  }

  /**
   * constructor for the Setup class, no params
   */
  function __construct() {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //default to error so set everything to that first
    $file = 'controllers/error.php';  //path to controller
    $regClass = 'error';              //controller class name
    $regFunction = null;              //function name (if isset)
    $regValues = null;                //values name (if isset)
    $postJSON = null;                 //post values (i always assume it's json for now)

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

    if (isset($_POST['json']))
      $postJSON = $_POST['json'];
    //require the file that has class we need
    require $file;
    //create new controller of the requested class
    $controller = new $regClass;
    $controller->LoadModel($regClass);
    //if there is a function to call, check if it exists and if not call index
    if (isset($regFunction) && method_exists($controller, $regFunction)) {
      $controller->{$regFunction}($regValues, $postJSON);
    } else {
      $controller->index();
    }
  }

}