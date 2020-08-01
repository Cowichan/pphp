<?php

$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
  <?php

  if(isset($_COOKIE["SomeName"])) {

  $someOne = $_COOKIE["SomeName"];

    echo $someOne;

  } else {
    $someOne = "";
  }

  ?>

    <script src="" async defer></script>
  </body>
</html>
