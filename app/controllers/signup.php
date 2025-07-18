<?php

class signup extends Controller {

  
  public function index(){
    $this->view('signup/index');
  }

  public function create(){
    $user = $this->model('User');
    
  }
}

?>