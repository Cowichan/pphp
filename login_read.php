<?php

// $connection = mysqli_connect('localhost', 'root', 'glyx', 'loginapp');
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=loginapp;charset=utf8', 'root', 'glyx');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$req = $bdd->query('SELECT * FROM users');

while ($donnees = $req->fetch())
{
  ?>

  <p>
  <strong>Pseudo :</strong> <?php echo $donnees['username']; ?>
  <?php
}
?>
  </p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="col-sm-6">

    </div>





</div>
</body>
</html>
