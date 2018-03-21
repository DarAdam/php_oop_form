<?php 

class DataUsers {
	public static function login_data_check($username, $password) {
		$file = ROOT_DIR. '/php_oop_form\data\users.txt';
		$data = fopen($file, 'r');
		$users = array();
		while (!feof($data)) {
			$file_row = fgets($data);
			$user = explode(',', $file_row);
			$users[] = $user;
		}
		foreach ($users as $user) {
			if($user[0] == $username && $user[1] == $password) {
				return true;
			} 
		}
		return false;
	}
}

 ?>