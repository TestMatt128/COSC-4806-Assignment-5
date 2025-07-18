<?php

class Reports extends Controller {
  
  public function index(){
    session_start();

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