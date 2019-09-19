<?php
  include("inc/header.php");
?>

<section class="content">
  <div class="col-md-12">
    <div class="container">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="col-md-12 text-center logbox">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="logform" action="dashboard.php">
              <div class="form-group">
                <input type="text" class="form-control loginput" placeholder="Naam">
              </div>
              <div class="form-group">
                <input type="password" class="form-control loginput" placeholder="Wachtwoord">
              </div>
              <div class="form-group">
                <input type="submit" class="btn logbtn" role="button" value="Login">
              </div>
            </form>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>

<?php
  include("inc/footer.php");
?>