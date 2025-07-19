<?php

class Reminder {

  public function __construct(){
    
  }
  public function getReminders(){
    $db = db_connect();
    $statement = $db->prepare("SELECT reminders.*, users.username FROM reminders JOIN users ON reminders.user_id = users.id ORDER BY reminders.time_created ASC;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  
}

?>