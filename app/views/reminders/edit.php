<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
  <div class="page-header mb-4">
      <h1>Edit Reminder</h1>
  </div>
<?php
session_start();
  if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
      echo "<p>Please <a href='/login' style='color: blue;'>log in</a> to edit reminders.</p>";
      exit;
  }

 
    
  <form action="/reminders/update/<?php echo htmlspecialchars($reminder['id']);?>" method="POST">
  <div class="mb-3">
    <label for="subject" class="form-label">Reminder Name/Subject</label>
      <input type="text" class="form-control" name="subject" id="subject" value="<?php echo htmlspecialchars($reminder['subject']);?>"required>
    </div>
    <button type="submit" class="btn btn-primary">Update Reminder</button>
    <a href="/reminders" class="btn btn-secondary">Cancel Process</a>
  </form> <!-- end of form -->
<?php require_once 'app/views/templates/footer.php' ?>