<?php

class Login extends Controller {
	// For the Professor that sees this code before running it,
	//* Use TestMatt as the username.
	//* Use Test128 as the password when testing to login.
    public function index() {		
	    $this->view('login/index');
    }
    
    public function verify(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
		
			$user = $this->model('User');
			$user->authenticate($username, $password); 
    }

}
