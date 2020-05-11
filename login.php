<?php
    require("partials/header.php");
    ?>
<section class="main_content">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-7">
        <div class="login_form">
          <h3 class="p-3">Login Form</h3>
          <form class="p-3 pt-5 w-50">
            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="form-group">
              <label for="inputPassword">Enter password</label>
              <input type="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    require("partials/footer.php");
    ?>
