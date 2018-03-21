<?php


define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);

function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}
spl_autoload_register('my_autoloader');



class Controler {

	public $data = [];

  	public function show_view($view=0) {
    	require 'view/'.(($view!==0 )? 'first_page':'login').'.php';
  	}
}

// require 'controler/login.php';
// $c = new Login;
// $c -> index();

if (isset($_GET['c']) && isset($_GET['m'])) {
			var_dump('ovde sam');
			$controler = $_GET['c'];
			$method = $_GET['m'];
			include 'controler/'.$controler.'.php';
			$c = new $controler;
			$c->$method();
		} else {
			// $controler = 'Login';
			// include 'controler/'.$controler.'.php';
			$c = new Controler;
			$c->show_view();
		}

 ?>
