<?php
include "db.php";
include "functions.php";
deleteRows();
?>

<?php include "includes/header.php"; ?>

  <div class="container">

    <div class="col-sm-6">
      <h2 class="text-center">DELETE</h2>
      <form action="login_delete.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>


        <select name="id" id="">
          <?php
          // $req = $bdd->query('SELECT * FROM users');

          showAllData();

           ?>
        </select>

        <input class="btn btn-primary" type="submit" name="submit" value="Delete">

      </form>
    </div>
    <div class="col-sm-12">
      <p><a href="login_read.php">Readddddddd</a> </p>
    </div>


<?php include "includes/footer.php"; ?>



