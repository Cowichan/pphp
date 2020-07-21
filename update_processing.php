<?php
include "db.php";



if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST["id"];


$req = $db->prepare('UPDATE users SET username = :username, password = :password WHERE id = "$id"');
$req->execute(array(
  'username' => $username,
  'password' => $password
 )) or die(print_r($db->errorInfo()));
//{
//     echo "goood<br>";

//   } else {
//   var_dump($req);
//   echo "failed<br>";
//   die(print_r($db->errorInfo()));
//   }
}
header('Location: login_read.php');
exit;
?>
