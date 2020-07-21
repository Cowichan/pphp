<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pphp update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <div class="col-sm-6">
      <form action="update_processing.php" method="post">
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
          include "functions.php";
          showAllData();
           ?>
        </select>

        <input class="btn btn-primary" type="submit" name="submit" value="submit">

      </form>
    </div>





</div>
</body>
</html>
