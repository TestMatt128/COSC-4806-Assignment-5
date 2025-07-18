<?php

class Reminders extends Controller {

    public function index() {		
      $username = $_SESSION['username'] ?? null;

      $reminders = $this->model('Reminder');
      $list_reminders = $reminders->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $list_reminders]);
    }

}