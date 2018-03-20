<?php 

class Login extends Controler {
	public function index() {
		if (isset($_GET['view'])) {
			$view = $_GET['view'];
		} else {
			$view = 'login';
		}
		$this -> show_view($view);
		if (isset($_POST['login'])) {
			$username = $_POST['uname'];
			$password = $_POST['psw'];
			$login = DataUsers::login_data_check($username, $password);
			if($login == true) {
				$view = 'first_page';
				header('Location: \php_oop_form\index.php?view=first_page');
				var_dump($view);
				echo 'tu sam';
			} else {
				echo 'Wrong username or password. Čik provali šifru ako možeš';
			}
		}
	}
}




 ?>