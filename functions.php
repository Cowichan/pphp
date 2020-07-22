<?php
include "db.php";
// database_connect();

function createRows() {
  if(isset($_POST['submit'])) {
  global $db;

  $pseudo = $_POST['username'];
  $mdp = $_POST['password'];

  $hashFormat = "$2y$10$";
  $salt = "abc22waawqqwqeccgjuhte";
  $hashF_and_salt = $hashFormat . $salt;

  $mdp = crypt($mdp, $hashF_and_salt);

  $req = $db->prepare("INSERT INTO users (username, password) VALUES (:pseudo, :mdp)");

  if
  ($req->execute(array("pseudo"=>$pseudo, "mdp"=>$mdp)))
  {
  echo "recorded";
    } else {
      echo "not recorded <br>";
      die(print_r($db->errorInfo()));
    }

  }
}

function readRows() {
  global $db;

  $req = $db->query('SELECT * FROM users');

  while ($donnees = $req->fetch())
  {
    print_r($donnees);
  }
}

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
  if(isset($_POST['submit'])) {
    global $db;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST["id"];

    $req = $db->prepare("UPDATE users SET username = :username, password = :password WHERE id = '$id'");
    if
    ($req->execute(array(
      'username' => $username,
      'password' => $password
    )))
    {
    echo "updated well";
      } else {
        echo "not updated <br>";
        die(print_r($db->errorInfo()));
      }
  }

}

function deleteRows() {
  if(isset($_POST['submit'])) {
    global $db;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST["id"];

    $req = $db->prepare("DELETE from users WHERE id = '$id'");
    if ($req->execute(array(
      'username' => $username,
      'password' => $password
    ))) {
      echo "deleted";
    } else {
      echo "Not deleted";
      die(print_r($db->errorInfo()));
    }
  }

}
