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

