<?php

class Signup extends Controller {
  
  public function index(){
    $message = $_SESSION['signup_message'] ?? '';
    unset($_SESSION['signup_message']);
    $this->view('Signup/index',['message' => $message]);
  }

  public function create(){
    $user = $this->model('User');

    // Password needs to be at least 7 characters long for it to be strong.
    function strong_password($password){
      return length($password) >= 7;
    }
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
       if(!strong_password($password)) {
          $_SESSION['signup_message'] = 'Password must be at least 7 characters long.';
         header('Location: /signup');
         exit;
       }
       elseif($user->$existing_username($username)){
         
       }
    }
    
    exit;
  }
}

?>