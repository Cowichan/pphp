<?php
include "db.php";

if(isset($_POST['submit'])) {

$pseudo = $_POST['username'];
$mdp = $_POST['password'];


$req = $db->prepare("INSERT INTO users (username, password) VALUES (:pseudo, :mdp)");
$req->execute(array("pseudo"=>$pseudo, "mdp"=>$mdp));

  if (!$req) {
die(print_r($db->errorInfo()));
  }


}
// header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <div class="col-sm-12">
      <h1 class="text-center">CREATE</h1>
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
    <div class="col-sm-12">
      <p><a href="login_read.php">Read</a></p>
    </div>
  </div>
</body>
</html>
