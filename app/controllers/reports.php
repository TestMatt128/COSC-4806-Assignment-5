<?php

class Reports extends Controller {
  
  public function index(){
    session_start();

    // Only the admin can view the reports. If this is not the admin, redirect to the login page.
    if (!isset($_SESSION['auth']) || strtolower($_SESSION['username'] ?? '') != 'admin'){
      header('Location: /login');
    }
    $db = db_connect();

    
  }
  public function user($id){
    session_start();
  }
  public function chart(){
    session_start();
  }
}

?>