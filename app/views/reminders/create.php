<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
    <div class="page-header mb-4">
        <h1>Create a Reminder</h1>
    </div>
    <?php

        if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
            echo "<p>Please <a href='/login' style='color: blue;'>log in</a> to create reminders.</p>";
            exit;
        }
        if(!empty($_SESSION['create_message'])){
          echo "<div class='alert alert-danger'>" .htmlspecialchars($_SESSION['create_message']) . "</div>";
          unset($_SESSION['create_message']);
        }
        ?>

        <form action="/reminders/store" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Reminder Name/Subject</label>
            <input type="text" class="form-control" namw="subject" id="subject" required>
          </div>
          <button type="submit" class="btn btn-primary">Create Reminder</button>
          <a href="/reminders" class="btn btn-secondary">Cancel Reminder</a>
          </form> <!-- end of form -->
</div>
<?php require_once 'app/views/templates/footer.php' ?>