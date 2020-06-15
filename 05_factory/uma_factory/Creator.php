<?php
include_once('Product.php');

// Creator.php
abstract class Creator {
    protected abstract function factoryMethod(Product $product);

    public function doFactory($productNow) {
        $contryProduct = $productNow;
        $mfg = $this->factoryMethod($contryProduct);
        return $mfg;
    }
}
?>