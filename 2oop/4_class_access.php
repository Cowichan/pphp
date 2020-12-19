<?php

class Car {

  public $wheels = 141;
  protected $hood = 1;
  private $engine = 1;
  var $doors = 4;

  function showProperty(){
    echo $this->engine;
  }

}



// $bmw = new Car();
// $bmw->showProperty();

$semi = new Semi();

// // echo $bmw->showProperty();

class Semi extends Car {

}

$semi->showProperty();
