<?php require_once 'app/views/templates/header.php' ?>

<form action="/signup/create" method="post" >
<fieldset>
  <div class="form-group">
    <label for="username">Username</label>
    <input required type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input required type="password" class="form-control" name="password">
  </div>
        <br>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</fieldset>
</form> 

<?php require_once 'app/views/templates/footer.php' ?>
