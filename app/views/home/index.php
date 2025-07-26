<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header bg-primary text grey p-2 rounded shadow-sm mb-4">
        <h1 class="display-4 text-center">Welcome home, <?=htmlspecialchars($_SESSION['username']) ?? 'Guest'?>!</h1>
        <p class="lead"><?=date("f, jS, Y");?></p></p>
        </div>
    </div>
    <div class="container">
        <a href="/reminders/create" class="btn btn-primary">Create New Reminder</a>
    </div>
    <?php require_once 'app/views/templates/footer.php' ?>
