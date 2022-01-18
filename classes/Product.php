<?php

//creo la class Product
class Product{

  //Proprietà
  private $brand;
  private $name;
  private $code;
  public $color;

  //Costruttore
  function __construct($_brand, $_name, $_code)
  {
    $this->brand = $_brand;
    $this->name = $_name;
    $this->code = $_code;
  }

  //Metodi


  //Setter




  //Getter
  public function getBrand(){
    return $this->brand;
  }

  public function getName(){
    return $this->name;
  }

  public function getCode(){
    return $this->code;
  }

}