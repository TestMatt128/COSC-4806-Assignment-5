<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function test () {
      $db = db_connect();
      $statement = $db->prepare("select * from users;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function authenticate($username, $password) { 
      // check if username exists and matches password
		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare("select * from users WHERE username = :name");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /home');
			exit;
		}
  }
  public function create ($username, $password){
      $username = strtolower($username);
      $db = db_connect();
      $statement = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
      $statement->bindValue(':username', $username);
      $statement->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
      return $statement->execute();
  
    }

}
