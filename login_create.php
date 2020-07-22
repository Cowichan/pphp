<?php
include "db.php";
include "functions.php";
createRows();
?>
<?php include "includes/header.php"; ?>
  <div class="container">

    <div class="col-sm-12">
      <h2 class="text-center">CREATE</h2>
        <form action="#" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

              <div class="form-group">
                <label                                                                  for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Create">

        </form>
    </div>
<?php include "includes/footer.php"; ?>
