<?php 

function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}
spl_autoload_register('my_autoloader');

class Controler {
  public function show_view($view) {
    require 'view/'.$view.'.php';
  }
}

require 'controler/login.php';
$c = new Login;
$c -> index();

 ?>
