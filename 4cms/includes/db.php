<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "glyx";
$db['db_name'] = "cms";

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if($connection) {
echo "We are connected";
}
?>
