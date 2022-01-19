<?php

//importo la classe Customer
require_once __DIR__ . '/Customer.php';

class CustomerPremium extends Customer{

  function __construct($_firstname, $_lastname)
  {
    //aggiungo/modifico qualcosa che non ho nella classe genitore
    parent::__construct($_firstname, $_lastname);
    $this->discount = 20;
    
  }
}
