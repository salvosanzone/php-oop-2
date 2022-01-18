<?php 
/* provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
*/


//importo la classe Product
require_once __DIR__ . '/classes/Product.php';



//inizializzo la classe Product con il costruttore
$new_product = new Product('Leica', 'M10', 5644654);

//inizializzo la classe Product
$new_product->color = 'Black';

var_dump($new_product);

//sono proprietà private, devo usare getBrand()
//var_dump($new_product->brand);


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
        <h4>Color</h4>
        <li>
          <?php echo $new_product->color; ?>
        </li>
      </ul>
  <!-- /PRODUCT -->

</body>
</html>