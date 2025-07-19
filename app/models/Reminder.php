<?php

class Reminder {

  public function __construct(){
    
  }
  public function getReminders(){
    $db = db_connect();
    $statement = $db->prepare("SELECT reminders.*, users.username FROM reminders JOIN users ON reminders.user_id = users.id ORDER BY reminders.created_at DESC");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  public function createReminder($user_id, $subject){
    $db = db_connect();
    $statement = $db->prepare("INSERT INTO reminders (user_id, subject, created_at) VALUES(:user_id, :subject, NOW(), 0)");
  }
  
}

?>