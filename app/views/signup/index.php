<?php require_once 'app/views/templates/headerPublic.php'; ?>

<main role="main" class="container">
  <div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-12">
            <h1>Welcome! Let's create your account.</h1>
        </div>
    </div>
</div>

  <div class="row">
    <div class="col-sm-auto">
      <form action="/signup/create" method="post" >
        <fieldset>
          <div class="form-group">
            <label for="username">Username</label>
            <input required type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" class="form-control" name="password" id="password">
          </div>
                <br>
            <button type="submit" class="btn btn-success">Sign Up</button>
          </fieldset>
        </form>
      </div>
    </div>
  </main>
<?php require_once 'app/views/templates/footer.php'; ?>
