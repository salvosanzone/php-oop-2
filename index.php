<?php 


//importo la classe
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Customer.php';
require_once __DIR__ . '/classes/CostumerPremium.php';



/****************************
 Product
 ****************************/
$new_product = new Product('Leica', 'M10', 5644654,8500,00);
$new_product->color = 'Black';




/****************************
 User
 ****************************/
$user1 = new User('Josef', 'Koudelka');
var_dump($user1);



/****************************
 Customer
 ****************************/
$customer1 = new Customer('Gilles', 'Peress');
var_dump($customer1);


/****************************
 CustomerPremium
 ****************************/
$c_premium1 = new CustomerPremium('James', 'Nachtwey');
var_dump($c_premium1);



/****************************
 CreditCard
 ****************************/
$card1 = new CreditCard(454878451245, 'Josef Koudelka', 224, 5, 2026);
var_dump($card1);




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
    <!-- <h2>Product</h2>
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
      </ul> -->
  <!-- /PRODUCT -->

  <!-- USER -->
    <!-- <h2>User</h2>
      <ul>
        <h4>Firstname</h4>
        <li>
          <?php echo $user1->getFirstname(); ?>
        </li>
        <h4>Lastname</h4>
        <li>
          <?php echo $user1->getLastname(); ?>
        </li>
      </ul> -->
  <!-- /USER -->

</body>
</html>