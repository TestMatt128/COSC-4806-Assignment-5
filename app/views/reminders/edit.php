<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
  <div class="page-header mb-4">
      <h1>Edit Reminder</h1>
  </div>
<?php
session_start();


?>
  <form action="/reminders/update" method="POST">
  <div class="mb-3">
    <label for="subject" class="form-label">Reminder Name/Subject</label>
      <input type="text" class="form-control" namw="subject" id="subject" value="<?php echo htmlspecialchars($reminder['subject']);?>"required>
    </div>
    <button type="submit" class="btn btn-primary">Update Reminder</button>
    <a href="/reminders" class="btn btn-secondary">Cancel Process</a>
  </form> <!-- end of form -->
<?php require_once 'app/views/templates/footer.php' ?>