<?php 

class Login extends Controler {
	public function index() {

		
		if (isset($_POST['login'])) {
			$username = $_POST['uname'];
			$password = $_POST['psw'];
			$login = DataUsers::login_data_check($username, $password);
			if($login == true) {
				$view = 'first_page';
				header("Location: /php_oop_form/?c=first_page&m=index");
				
			} else {
				
				echo 'Wrong username or password. Čik provali šifru ako možeš';
			}
		}
		$this -> show_view('login');
	}
}




 ?>