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
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php

    class Car {

      var $wheels = 4;

      // function MoveWheels(){
      //     echo " Wheels move";
      // }

      function callMethodWheels(){
        $this->wheels = 1101;
      }


    }

    // if(method_exists("Car", "MoveWheels")) {
    // echo "The Method Exist";
    // } else {
    // echo "no it does not";
    // }

    $bmw = new Car();
    // $bmw->MoveWheels();
    $truck = new Car();

    // echo ' ' . $bmw->callMethodWheels();
    echo ' ' . $bmw->wheels . "<br>";
    echo ' ' . $truck->wheels = 10;
    ?>

    <script src="" async defer></script>
  </body>
</html>



