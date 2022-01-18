<?php




class CreditCard {
  private $iban;


  //Costruttore

  function __construct($_iban)
  {
    $this->iban = $_iban;
  }



  //Setter
  public function setIban($_iban){
    $this->iban = $_iban;
  }

  //Getter
  public function getIban(){
    return $this->iban;
  }
}
