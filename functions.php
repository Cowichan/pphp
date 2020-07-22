<?php
include "db.php";
// database_connect();
function showAllData() {
  global $db;
  $req = $db->query('SELECT * FROM users');

  while ($donnees = $req->fetch())
  {
    $id = $donnees['id'];

    echo "<option value='$id'>$id</option>";
  }
}

function UpdateTable() {
  global $db;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST["id"];


$req = $db->prepare("UPDATE users SET username = :username, password = :password WHERE id = '$id'");
$req->execute(array(
  'username' => $username,
  'password' => $password
 )) or die(print_r($db->errorInfo()));

}

