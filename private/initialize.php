<?php
  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__)); //parent of current file -> /private
define("PROJECT_PATH", dirname(PRIVATE_PATH));  //parent of PRIVATE_PATH -> root directory
define("PUBLIC_PATH", PROJECT_PATH . '/public'); //root directory + /public
define("SHARED_PATH", PRIVATE_PATH . '/shared'); //private + /shared


  require_once('functions.php');
