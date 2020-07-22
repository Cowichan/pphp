<?php

if(isset($_POST['submit'])) {

$pseudo = $_POST['username'];
$mdp = $_POST['password'];


// $connection = mysqli_connect('localhost', 'root', 'glyx', 'loginapp');

$bdd = new PDO('mysql:host=localhost;dbname=loginapp;charset=utf8mb4', 'root', 'glyx', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    if($bdd) {

    echo "We are connected2";

    } else {

    die("Database connection failed");

    }

$req = $bdd->prepare("INSERT INTO users (username, password) VALUES (:pseudo, :mdp)");
$req->execute(array("pseudo"=>$pseudo, "mdp"=>$mdp));

  if (!$req) {
die(print_r($bdd->errorInfo()));
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

    <div class="col-sm-6">
        <form action="#" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

             <div class="form-group">
                <label                                                                  for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>





</div>
</body>
</html>
