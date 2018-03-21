<?php 

class Login extends Controler {
	public function index() {

		// var_dump('ovde sam');die;
		
		if (isset($_POST['login'])) {
			$username = $_POST['uname'];
			$password = $_POST['psw'];
			$login = DataUsers::login_data_check($username, $password);
			if($login == true) {
				// var_dump('ovde sam');die;
				$view = 'first_page';
				$this -> show_view($view);die;
				
				// echo 'tu sam';
			} else {
				// $view = 0;
				echo 'Wrong username or password. Čik provali šifru ako možeš';
			}
		}
		$this -> show_view($view);
	}
}




 ?>