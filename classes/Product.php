<?php

//creo la class Product
class Product{

  //Proprietà
  private $brand;
  private $name;
  private $code;
  private $price;
  public $color;

  //Costruttore
  function __construct($_brand, $_name, $_code, $_price)
  {
    $this->brand = $_brand;
    $this->name = $_name;
    $this->code = $_code;
    $this->price = $_price;
  }




  //Setter
  public function setBrand($_brand){
    $this->brand = $_brand;
  }

  public function setName($_name){
    $this->name = $_name;
  }

  public function setCode($_code){
    $this->code = $_code;
  }



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

  public function getPrice(){
    return $this->price;
  }

}