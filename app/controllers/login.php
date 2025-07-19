<?php

class Login extends Controller {
	//* For the Professor that sees this code before running it,
	//* Use TestMatt as the username.
	//* Use Test128 as the password when testing to login.
    public function index() {		
			// If the login fails
			$message = $_SESSION['login_message'] ?? '';
			unset($_SESSION['login_message']);
	    $this->view('login/index');
    }
    
    public function verify(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];

			// echo $username; die;
			// Just for testing purposes and that the verify function works.
		
			$user = $this->model('User');
			$user->authenticate($username, $password); 
    }

}
