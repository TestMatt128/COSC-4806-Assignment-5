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
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':subject', $subject);
    return $statement->execute()
    
  }
  public function getReminderByid($id){
    $db = db_connect();
    $statement = $db->prepare("SELECT * FROM reminders WHERE id = :id");
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC)
  }
  public function updateReminder($id, $subject){
    $db = db_connect();
    $statement = $db->prepare("UPDATE reminders SET subject = :subject WHERE id = :id");
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':subject', $subject, PDO::PARAM_STR);
    return $statement->execute();
  }
  public function deleteReminder($id){
    $db = db_connect();
    $statement = $db->prepare("DELETE FROM reminders WHERE id = :id");
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    return $statement->execute();
  }
  public function completeReminder($id, $completed){
    $db = db_connect();
    if($completed){
       $statement = $db->prepare("UPDATE reminders SET completed = 1, NOW() WHERE id = :id");
    } else {
       $statement = $db->prepare("UPDATE reminders SET completed = 0, NULL WHERE id = :id");
    }
     $statement->bindValue(':id', $id, PDO::PARAM_INT);
    return $statement->execute();
  }
  public function getRemindersByUser($user_id){
    $db = db_connect();
    $statement = $db->prepare("SELECT * FROM reminders WHERE user_id = :user_id ORDER BY created_at DESC");
    $statement->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $statement->execute($user_id);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
?>