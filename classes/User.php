<?php

class User{

  //Proprietà
  private $firstname;
  private $lastname;
  private $age;
  public $email;
  protected $discount = 0;
  
  //inserisco una proprietà che non è di base presente nella classe User quindi non la metto nel costrutto
  private $creditcard;

  //Costruttore
  function __construct($_firstname, $_lastname)
  {
    $this->firstname = $_firstname;
    $this->lastname = $_lastname;
  }


  //Setter
  public function setFirstname($_firstname){
    $this->firstname = $_firstname;
  }

  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }





  //Getter
  public function getFirstname(){
    return $this->firstname;
  }

  public function getLastname(){
    return $this->lastname;
  }


  //creo un metodo insertCreditCard che ha come parametro una instanza della classe CreditCard
  public function insertCreditCard($_creditcard){
    $this->creditcard = $_creditcard;

  }
}