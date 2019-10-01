<?php
  include("inc/header.php");
?>

<section class="content">
  <div class="col-sm-6 col-12 mx-auto">
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
</section>

<?php
  include("inc/footer.php");
?>
