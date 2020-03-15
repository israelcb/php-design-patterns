<?php
// UseProducts.php
include_once('FruitStore.php');
include_once('CitrusStore.php');

class UseProducts {

  function __construct() {

    $appleSauce = new FruitStore();
    $orangeJuice = new CitrusStore();

    $this->doInterface($appleSauce);
    $this->doInterface($orangeJuice);
  }

  //IProduct induz o tipo em doInterface()
  function doInterface(IProduct $product) {
    echo $product->apples();
    echo $product->oranges();
  }
}
$worker = new UseProducts();
?>
