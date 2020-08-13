<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>

<?php

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function MoveWheels(){
    $this->wheels = 10;
  }

  function CreateDoors(){
    $this->doors = 6;
  }

}

$bmw = new Car();
// $bmw->MoveWheels();

class Plane extends Car {
  var $wheels = 20;
}

$jet = new Plane();

// echo $jet->MoveWheels();
echo $jet->wheels;

// if(class_exists("Plane")) {
//   echo "it does";
// }


?>

    <script src="" async defer></script>
  </body>
</html>



