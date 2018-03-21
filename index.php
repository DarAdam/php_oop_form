<?php


define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);

function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}
spl_autoload_register('my_autoloader');



class Controler {

	public $data = [];

  	public function show_view($view) {
    	require 'view/'.$view.'.php';
  	}
}

// require 'controler/login.php';
// $c = new Login;
// $c -> index();

if (isset($_GET['c']) && isset($_GET['m'])) {
			
			$controler = $_GET['c'];
			$method = $_GET['m'];
			include 'controler/'.$controler.'.php';
			$c = new $controler;
			$c->$method();
		} else {
			include 'controler/login.php';
			$c = new Login;
			$c->index();
		}

 ?>
