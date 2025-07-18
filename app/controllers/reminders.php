<?php

class Reminders extends Controller {

    public function index() {		
      $username = $_SESSION['username'] ?? null;

      $reminders = $this->model('Reminder');
      $list_reminders = $reminders->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $list_reminders]);
    }
    public function create() {
      $reminders = $this->model('Reminder');
      $reminders->create_reminder();
      header('location: /reminders');
    }
    public function store() {
      $reminders = $this->model('Reminder');
      $reminders->store_reminder();
      header('location: /reminders');
    }
    public function edit($id){
      session_start();
      
    }
    public function update($id){
      session_start();
      $reminders = $this->model('Reminder');
      $reminders->update_reminder($id);
      header('location: /reminders');
    }
    public function delete($id){
      $reminders = $this->model('Reminder');
      $reminders->delete_reminder($id);
    }

}