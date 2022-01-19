<?php 


//importo la classe
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Customer.php';



/****************************
 Product
 ****************************/
$new_product = new Product('Leica', 'M10', 5644654,8500,00);
$new_product->color = 'Black';




/****************************
 User
 ****************************/
$user1 = new User('Josef', 'Koudelka', 73, 'josef@gmail.com');
var_dump($user1);



/****************************
 Customer
 ****************************/
$customer1 = new Customer('Gilles', 'Peress', 60, 'peress.gilles@gmail.com');
var_dump($customer1);



/****************************
 CreditCard
 ****************************/
$card1 = new CreditCard('IT654654654565');



//collego l'user1 e la card1 ma essendo una proprieta privata mi darà errore
//$user1->creditcard = $card1;

//collego l'user1 e la card1 passandola come parametro di un metodo
$user1->insertCreditCard($card1);
var_dump($user1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- PRODUCT -->
    <h2>Product</h2>
      <ul>
        <h4>Brand</h4>
        <li>
          <?php echo $new_product->getBrand(); ?>
        </li>
        <h4>Name</h4>
        <li>
          <?php echo $new_product->getName(); ?>
        </li>
        <h4>Code</h4>
        <li>
          <?php echo $new_product->getCode(); ?>
        </li>
        <h4>Price</h4>
        <li>
          <?php echo $new_product->getPrice(); ?>$
        </li>
        <h4>Color</h4>
        <li>
          <?php echo $new_product->color; ?>
        </li>
      </ul>
  <!-- /PRODUCT -->

  <!-- USER -->
    <h2>User</h2>
      <ul>
        <h4>Firstname</h4>
        <li>
          <?php echo $user1->getFirstname(); ?>
        </li>
        <h4>Lastname</h4>
        <li>
          <?php echo $user1->getLastname(); ?>
        </li>
      </ul>
  <!-- /USER -->

</body>
</html>