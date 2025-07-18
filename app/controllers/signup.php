<?php

class signup extends Controller {

  
  public function index(){
    $this->view('signup/index');
  }

  public function create(){
    $new_user = $this->model('User');
    
  }
}

?>