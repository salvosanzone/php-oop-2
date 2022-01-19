<?php

class CreditCard {

  //Proprietà
  private $number;
  private $name;
  private $cvv;
  private $expired_date_m;
  private $expired_date_y;

  //Costruttore
  function __construct($_number, $_name, $_cvv, $_expired_date_m, $_expired_date_y)
  {
    $this->number = $this->checkPrivateNumber($_number);
    $this->name = $_name;
    $this->cvv = $_cvv;
    $this->expired_date_m = $_expired_date_m;
    $this->expired_date_y = $_expired_date_y;
  }



  //Setter
  public function setNumber($_number){
    $this->number = $_number;
  }
  public function setName($_name){
    $this->name = $_name;
  }
  public function setCvv($_cvv){
    $this->cvv = $_cvv;
  }
  public function setExpired_date_m($_expired_date_m){
    $this->expired_date_m = $_expired_date_m;
  }
  public function setExpired_date_y($_expired_date_y){
    $this->expired_date_y = $_expired_date_y;
  }

  //Getter
  public function getNumber(){
    return $this->number;
  }

  public function getName(){
    return $this->name;
  }

  public function getCvv(){
    return $this->cvv;
  }

  public function getExpired_date_m(){
    return $this->expired_date_m;
  }

  public function getExpired_date_y(){
    return $this->expired_date_y;
  }

  //creo una funziona che mi controlla la validità dei dati
  private function checkPrivateNumber($number){
    if(!is_int($number) || strlen($number) != 12){
      throw new Exception('Numero carta di credito non valido');
    }return $number;
  }




}
